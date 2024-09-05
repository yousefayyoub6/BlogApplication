<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="index.html">
                <i class="bi bi-grid"></i>
                <span>Blog Application</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <!-- Start Images -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-file-earmark-post-fill"></i><span>Post</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('post.index')}}">
                        <i class="bi bi-circle"></i><span>Show Posts</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('post.create')}}">
                        <i class="bi bi-circle"></i><span>Add Post</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Images -->


    </ul>
</aside>
