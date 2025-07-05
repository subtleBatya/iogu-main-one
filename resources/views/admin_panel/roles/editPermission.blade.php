@extends('components.admin_layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-6">
                <!-- Account -->
                <div class="card-body pt-4">
                    <div class="d-flex justify-content-between">
                        <h3>Edit Role</h3>
                        {{-- <button type="button" class="btn btn-primary">Button</button> --}}
                    </div>
                    <section class="pb-4">
                        <div class="border rounded-5">
                            <section class="w-100 p-4">
                                <div class="row">
                                    <!-- Sidebar (Left Column) -->
                                    <div class="col-md-3">
                                        <div class="list-group" id="sidebar">
                                            <a href="#" class="list-group-item list-group-item-action"
                                                data-content="users" data-bs-toggle="sidebar-element">Teaching</a>
                                            <a href="#" class="list-group-item list-group-item-action active"
                                                data-content="roles" data-bs-toggle="sidebar-element">Learning</a>
                                        </div>
                                    </div>

                                    <!-- Dynamic Content (Right Column) -->
                                    <div class="col-md-9">
                                        <div class="card">
                                            <div class="card-header bg-success text-white">
                                                Manage Permissions
                                            </div>
                                            <?php $names = ['teaching', 'learning'];?>
                                            <div class="card-body" id="contentArea">
                                                <!-- Default content -->
                                                @foreach ($names as $name)
                                                <div id="{{$name}}" class="d-none">
                                                    <form
                                                        action="{{route('roles.update_permission', [$name, $role->id, 'routeUrl' => url()->full()])}}"
                                                        method="POST" data-bs-toggle="submittion-forms">
                                                        @csrf
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="enable" id="{{$name}}" data-bs-toggle=""
                                                                {{$role->hasPermissionTo($name)?'checked':''}}>
                                                            <label class="form-check-label"
                                                                for="enableCheck">{{ trans('admin_general.enable') }}</label>
                                                        </div>
                                                        <button type="submit" class="btn btn-success mt-3"
                                                            id="{{$name}}_updateBtn">{{ trans('admin_general.update') }}</button>
                                                    </form>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </section>
                </div>
                <!-- /Account -->
            </div>
        </div>
    </div>
</div>
<script>
    // JavaScript to enable the Update button if any checkbox is checked
    document.addEventListener('DOMContentLoaded', function() {
        function selectElement(id, valueToSelect) {
        let element = document.getElementById(id);
        if(element != null)
        {
            element.checked = valueToSelect;
            element.value = valueToSelect?1:0;
        }
        }
        @foreach(Spatie\Permission\Models\Permission::all() as $permission)
        selectElement("{{$permission->name}}", {{$role->hasPermissionTo($permission)?true:false}});
        @endforeach


        const sidebarItems = document.querySelectorAll('[data-bs-toggle="sidebar-element"]');
        const contentSections = document.querySelectorAll('#contentArea > div');
        
        // Function to hide all content sections
        function hideAllSections() {
            contentSections.forEach(section => {
                section.classList.add('d-none');
            });
        }
        
        // Function to show the selected section
        function showSection(sectionId) {
            hideAllSections();
            document.getElementById(sectionId).classList.remove('d-none');
        }
        
        // Add click event listeners to sidebar items
        sidebarItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                // Remove 'active' class from all items
                console.log(sidebarItems);
                
                sidebarItems.forEach(link => link.classList.remove('active'));
                console.log(sidebarItems);
                // Add 'active' class to the clicked item
                this.classList.add('active');
                // Get the content section to display
                const contentId = this.getAttribute('data-content');
                showSection(contentId);
            });
        });
    });
    @session("edition-success")
        Swal.fire({
            title: "{{trans('admin_general.success')}}",
            text: "{{session('edition-success')}}",
            icon: "success"
        });
    @endsession
    // @if($errors->any())
    //     {{dd($errors)}}
    // @endif
</script>
@endsection