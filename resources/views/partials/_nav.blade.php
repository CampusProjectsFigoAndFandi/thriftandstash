<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="headerIndex sticky-top">
        <div class="brandSearchLoginNavbar">
            <span class="brandNav">
                <a href="/posts"><span class="material-symbols-rounded m-auto">
                        store
                    </span>Thrift & Stash</a>
            </span>
            <a href="/" class="aboutUsNav">About us</a>
            <form action="/posts">
                <input type="text" name="search" class="form-control">
                <button class="material-symbols-rounded">Search</button>
            </form>
            <div class="authNav">
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <button>
                            <span class="material-symbols-rounded">
                                logout
                            </span>
                            Logout
                        </button>
                    </form>
                @else
                    <a href="/login">
                        <span class="material-symbols-rounded">
                            login
                        </span>
                        Login
                    </a>
                    <a href="/register">
                        <span class="material-symbols-rounded">
                            app_registration
                        </span>
                        Register
                    </a>

                @endauth
            </div>
        </div>
        <div class="categoryNavbar">
            <div class="newPostRoute">
                <a href="/posts/new">
                    <span class="material-symbols-rounded">
                        add_circle
                    </span>
                    Post Iklan</a>
            </div>
            <!-- pakai form karena termasuk dalam query search, kalau anchor tidak bisa -->
            <div class="categoryList">
                <a href="/posts/?category=Elektronik">Elektronik</a>
                <a href="/posts/?category=Perabotan Rumah">Perabotan Rumah</a>
                <a href="/posts/?category=Properti">Properti</a>
                <a href="/posts/?category=Motor">Motor</a>
                <a href="/posts/?category=Mobil">Mobil</a>
            </div>
            <div class="managePostRoute">
                @auth
                    <a href="/users/{{ auth()->user()->id }}/manage">
                        <span class="material-symbols-rounded">
                            manage_search
                        </span>
                        Manage Iklan
                    </a>
                @endauth
            </div>

        </div>
    </div>

</nav>
