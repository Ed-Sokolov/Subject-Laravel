<header class="header bg-warning-subtle mb-3">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav fs-5 text-uppercase">
                        <a class="nav-link" href="{{ route('contact.create') }}">New contact</a>
                        <a class="nav-link" href="{{ route('contact.index') }}">Contacts</a>
                        <a class="nav-link" href="{{ route('comment.index') }}">Comments</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
