
@props(['page'])



<div>
    <ul class="nav nav-tabs mt-5">
        <li class="nav-item">
            <a href='{{ route('dashboard') }}' class="nav-link {{ ( $page == 'dashboard') ? 'active':'' }}"  >Dashboard</a>
        </li>
        <li class="nav-item">
            <a href='{{ route('users') }}'  class="nav-link {{ ( $page == 'users') ? 'active':'' }}">Users</a>
        </li>
        <li class="nav-item">
            <a href='{{ route('tasks') }}' class="nav-link {{ ( $page == 'tasks') ? 'active':'' }}"  aria-current="page">Tasks</a>
        </li> 
    </ul>
</div>