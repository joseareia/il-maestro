<script setup>
import { useRouter } from 'vue-router'
const router = useRouter()
</script>

<template>
    <div class="container-fluid">
        <nav id="sidebarMenu" class="d-md-block sidebar collapse">
            <div class="logo">
                <router-link class="nav-link" id="nav-link-logo" :to="{ name: 'Dashboard' }">
                    <span style="vertical-align">Il Maestro.</span>
                </router-link>
            </div>

            <div class="position-sticky pt-3">
                <ul class="nav flex-column" id="nav-flex-sidebar">
                    <li class="nav-item nav-item-title">Navigation</li>
                    <li class="nav-item">
                        <router-link class="nav-link" :class="{ active: $route.name === 'Dashboard' }" :to="{ name: 'Dashboard' }">
                            <i class="bi bi-house" style="position:relative;bottom:1.5px;"></i>
                            Dashboard
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed"  data-bs-toggle="collapse" href="#sidebarNodes" aria-expanded="false" aria-controls="sidebarIP"
                        :class="{ active: $route.name === 'Nodes' || $route.name === 'MasterNodes' }">
                            <i class="bi bi-gear"></i> Cluster Nodes
                            <span class="menu-arrow"> <i class="bi bi-chevron-right"></i> </span>
                        </a>
                        <div class="collapse" id="sidebarNodes">
                            <ul class="side-nav-second-level">
                                <li>
                                    <router-link class="nav-link" :class="{ active: $route.name === 'Nodes' }" :to="{ name: 'Nodes' }">
                                        All Nodes
                                    </router-link>
                                </li>
                                <li>
                                    <router-link class="nav-link" :class="{ active: $route.name === 'MasterNodes' }" :to="{ name: 'MasterNodes' }">
                                        Master Nodes
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                       <router-link class="nav-link" :class="{ active: $route.name === 'Namespaces' }" :to="{ name: 'Namespaces' }">
                       <i class="bi bi-square"></i>
                            Namespaces
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" :class="{ active: $route.name === 'Pods' }" :to="{ name: 'Pods' }">
                            <i class="bi bi-box-fill"></i>
                            Pods
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" :class="{ active: $route.name === 'Services' }" :to="{ name: 'Services' }">
                            <i class="bi bi-diagram-3"></i>
                            Services
                        </router-link>
                    </li>
                     <router-link class="nav-link" :class="{ active: $route.name === 'Deployments' }" :to="{ name: 'Deployments' }">
                           <i class="bi bi-arrow-clockwise"></i>
                            Deployments
                    </router-link>
                </ul>
            </div>
        </nav>
    </div>
</template>

<style scoped>
#nav-link-logo:hover {
    background-color: #313a46 !important;
}

#sidebarMenu {
    width: 260px;
    min-width: 260px;
    overflow-y: auto;
    overflow-x: hidden;
    background-color: #313a46;
    z-index: 2000;
    box-shadow: 0 0 35px 0 rgba(154, 161, 171, .15) !important;
}

.logo {
    height: 4.375rem;
    width: 260px;
    min-width: 260px;
    position: fixed;
    top: 0;
    color: #fff !important;
    text-decoration: none !important;
    background-color: #313a46;
    z-index: 9999;
}

.logo:hover {
    background-color: #313a46;
}

.logo .nav-link {
    height: 4.375rem;
    width: 260px;
    font-size: 1.313rem;
    font-weight: 800;
    color: #fff !important;
    display: flex;
    align-items: center;
    justify-content: center;
}

.nav-link:hover {
    color: #fff !important;
    /* background-color: #374151; */
    border-radius: 5px;
}

.nav-link:hover>svg {
    fill: #fff;
}

ul {
    padding: 3rem .75rem;
}

.nav-item-title {
    padding: 12px 20px;
    letter-spacing: .05em;
    pointer-events: none;
    cursor: default;
    font-size: .6875rem;
    text-transform: uppercase;
    color: #7e8d9f;
    font-weight: 700;
}

ul> :first-child {
    padding: 0 20px 12px 20px !important;
}

.nav-link {
    display: block;
    padding: 13px 20px;
    font-size: .9375rem;
    position: relative;
    color: #8391a2;
    font-weight: 500;
}

.nav-link:focus,
.nav-link:active {
    color: #fff !important;
    text-decoration: none;
}

.sidebar .nav-link.active,
.sidebar .nav-link.active svg {
    color: #fff;
    font-weight: 600;
    fill: #fff !important;
}

.nav-link i {
    display: inline-block;
    line-height: 1.0625rem;
    margin: -3px 10px 0 0;
    font-size: 1.1rem;
    vertical-align: middle;
    width: 20px;
}

svg {
    fill: #ccc;
    transition: .15s ease-in-out;
    display: inline-block;
    line-height: 1.0625rem;
    margin: -3px 10px 0 0;
    font-size: 1.1rem;
    vertical-align: middle;
    width: 20px;
}

.text-gray-800,
.text-gray-800:hover {
    color: #1f2937 !important;
}

.badge-md {
    padding: .25rem .4rem;
}

.badge {
    font-size: 12px;
    font-weight: 700;
}

#sidebarMenu .menu-arrow {
    -webkit-transition: -webkit-transform .15s;
    transition: -webkit-transform .15s;
    transition: transform .15s;
    transition: transform .15s,-webkit-transform .15s;
    position: absolute;
    right: 12px;
    display: inline-block;
    text-rendering: auto;
    line-height: 1.5rem;
    font-size: 1.1rem;
    -webkit-transform: translate(0,0);
    transform: translate(0,0);
}

#sidebarMenu .nav-item > a[aria-expanded="true"] > span.menu-arrow {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
}

.bi-chevron-right {
    font-size: .875rem !important;
    font-weight: 700 !important;
    margin: 0 !important;
    line-height: 0 !important;
    bottom: 3px;
    position: relative;
    display: inline;
    width: 1rem !important;
    height: 1rem !important;
}

.nav-item:hover {
    cursor: pointer !important;
}

.side-nav-second-level li a {
    padding: 10px 30px 8px 54px;
    display: block;
    position: relative;
    -webkit-transition: all .4s;
    transition: all .4s;
    font-size: .89rem;
    text-decoration: none;
    color: #8391a2;
}


.side-nav-second-level li a:hover {
    color: #fff;
}

ul.side-nav-second-level {
    padding: 0 !important;
}

ul.side-nav-second-level li {
    padding: 0 !important;
}

.side-nav-third-level li a {
    padding: 10px 30px 8px 65px;
    display: block;
    position: relative;
    -webkit-transition: all .4s;
    transition: all .4s;
    font-size: .89rem;
    text-decoration: none;
    color: #8391a2;
}


.side-nav-third-level li a:hover {
    color: #fff;
}

ul.side-nav-third-level {
    padding: 0 !important;
}

ul.side-nav-third-level li {
    padding: 0 !important;
}
</style>
