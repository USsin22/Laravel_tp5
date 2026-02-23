<aside class="sidebar bg-dark text-white" style="min-height: 100vh; width: 250px; position: fixed; left: 0; top: 0; padding-top: 20px;">
    <div class="sidebar-brand px-3 mb-4">
        <h4 class="mb-0">
            <h1 class="text-white text-decoration-none">--<>--</h1>
        </h4>
    </div>

    <nav class="sidebar-nav">
        <ul class="nav flex-column px-2">
            <li class="nav-item mb-2">
                <a class="nav-link text-white {{ request()->is('/') ? 'active bg-secondary' : '' }}" href="/">
                  Home
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link text-white {{ request()->is('prodacts*') ? 'active bg-secondary' : '' }}" href="/prodacts">
                     Products
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link text-white {{ request()->is('profile*') ? 'active bg-secondary' : '' }}" href="/profile">
                     Profile
                </a>
            </li>
            
            <li class="nav-item mb-2">
                <a class="nav-link text-white {{ request()->is('contact*') ? 'active bg-secondary' : '' }}" href="/contact">
                 Contact
                </a>
            </li>
        </ul>
    </nav>
</aside>

<style>
    body {
        margin-left: 250px;
    }

    .sidebar {
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    }

    .sidebar-nav .nav-link {
        padding: 10px 15px;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .sidebar-nav .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.1);
        padding-left: 20px;
    }

    .sidebar-nav .nav-link.active {
        background-color: #6c757d;
    }

    @media (max-width: 768px) {
        body {
            margin-left: 0;
        }

        .sidebar {
            width: 100%;
            position: relative;
            min-height: auto;
            display: flex;
            padding: 0;
        }

        .sidebar-nav {
            display: flex;
            flex-direction: row;
            width: 100%;
        }

        .sidebar-nav .nav {
            flex-direction: row !important;
            width: 100%;
        }

        .sidebar-nav .nav-item {
            margin-bottom: 0 !important;
            flex: 1;
        }

        .sidebar-nav .nav-link {
            text-align: center;
        }
    }
</style>
