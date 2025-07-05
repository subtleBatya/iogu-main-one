<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\News;
use App\Models\Notes;
use App\Models\Sport;
use App\Models\About;
use App\Models\Contact;
use Symfony\Component\Process\Process;


class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $newsCount = News::count();
        $notesCount = Notes::count();
        $sportCount = Sport::count();
        $aboutCount = About::count();
        $contactCount = Contact::count();

        return view('admin_panel.main', compact(
            'userCount',
            'newsCount',
            'notesCount',
            'sportCount',
            'aboutCount',
            'contactCount'
        ));
    }

    public function backup()
    {
        $backupTime = now()->format('Y_m_d_H_i_s');
        $zipFileName = "backup_{$backupTime}.zip";
        $zipFolderPath = storage_path('app/public/backups');

        // Ensure backup directory exists
        if (!file_exists($zipFolderPath)) {
            mkdir($zipFolderPath, 0755, true);
        }

        $zipFilePath = $zipFolderPath . '/' . $zipFileName;

        // 🔥 Important: Unlink *before* opening
        if (file_exists($zipFilePath)) {
            unlink($zipFilePath);
        }


        $zip = new \ZipArchive();
        if ($zip->open($zipFilePath, \ZipArchive::CREATE) !== TRUE) {
            return redirect()->back()->with('error', 'Could not create ZIP file.');
        }

        // Database credentials
        $dbName = env('DB_DATABASE');
        $dbUser = env('DB_USERNAME');
        $dbPass = env('DB_PASSWORD');
        $dbHost = env('DB_HOST');
        $dumpFile = storage_path('app/public/backups/db_backup.sql');

        // Ensure folder exists
        if (!file_exists(dirname($dumpFile))) {
            mkdir(dirname($dumpFile), 0755, true);
        }

        // Backup DB using mysqldump
        $command = sprintf(
            'mysqldump --user=%s --password=%s --host=%s %s > %s',
            escapeshellarg($dbUser),
            escapeshellarg($dbPass),
            escapeshellarg($dbHost),
            escapeshellarg($dbName),
            escapeshellarg($dumpFile)
        );

        $output = null;
        $returnVar = null;
        system($command, $returnVar);

        if ($returnVar !== 0 || !file_exists($dumpFile)) {
            return redirect()->back()->with('error', 'Database backup failed.');
        }

        // Add database dump to ZIP
        $zip->addFile($dumpFile, 'db_backup.sql');

        // Add folders
        $this->addFolderToZip(storage_path('app'), $zip, 'storage_app', [$zipFilePath]);

        $zip->close();

        // Clean up
        unlink($dumpFile);

        return response()->download($zipFilePath)->deleteFileAfterSend(true);
    }


    private function addFolderToZip($folder, \ZipArchive $zip, $zipFolder, $excludePaths = [])
    {
        $files = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($folder, \RecursiveDirectoryIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::LEAVES_ONLY
        );

        foreach ($files as $file) {
            if (!$file->isDir()) {
                $filePath = $file->getRealPath();

                // Skip excluded paths (e.g., the backup file itself)
                foreach ($excludePaths as $exclude) {
                    if (strpos($filePath, $exclude) === 0) {
                        continue 2; // Skip this file
                    }
                }

                $relativePath = $zipFolder . '/' . substr($filePath, strlen($folder) + 1);
                $zip->addFile($filePath, $relativePath);
            }
        }
    }
}
