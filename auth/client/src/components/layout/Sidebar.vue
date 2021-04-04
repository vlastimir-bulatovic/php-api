<template>
    <div class="d-flex" id="wrapper" v-bind:class="{ toggled: isActive }">
        <div id="page-content-wrapper">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light px-3">
                <a class="navbar-brand  w-25 " href="#">Navbar</a>
                <button class="btn border d-none d-lg-block" id="menu-toggle" @click="isActive = !isActive">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <!--Profile img and name-->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="img-fluid rounded-circle" src="https://via.placeholder.com/50" alt="">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Action</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Sidebar -->
                    <div  id="sidebar-wrapper" class="w-25" >
                        
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                            <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
                            <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
                            <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
                            <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
                            <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
                        </div>
                    </div>
                    <!-- /#sidebar-wrapper -->
                </div>
            </nav>
            <!-- /Navbar -->
            
            
        </div>
    </div>
</template>

<script>
export default {
    name: 'Sidebar',
    data(){
        return{
            isActive: true
        }
    },
};
</script>
