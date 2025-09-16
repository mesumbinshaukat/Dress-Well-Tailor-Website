<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <!-- <div class="search_bar dropdown position-relative">
                        <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                            <i class="mdi mdi-magnify"></i>
                        </span>
                        <div class="dropdown-menu p-0 m-0 shadow-sm border" style="width: 350px; position: absolute; top: 100%; left: 0; z-index: 999; transform: translateX(-50%); margin-top: 5px;">
                            <form id="globalSearchForm">
                                <div class="input-group p-2">
                                    <input class="form-control" type="search" id="globalSearchInput" placeholder="Search across all records..." aria-label="Search">
                                    <div class="input-group-append">
                                        <select class="form-control" id="searchModule" style="max-width: 120px;">
                                            <option value="all">All Modules</option>
                                            <option value="details">Kameez/Shalwar</option>
                                            <option value="suits">Suits</option>
                                            <option value="coats">Shirt & Waist Coat</option>
                                            <option value="pantshirts">Pant & Shirt</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="searchResults" class="p-2" style="max-height: 200px; overflow-y: auto; display: none; background: white;"></div>
                            </form>
                        </div>
                    </div> -->
                </div>

                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-bell"></i>
                            <div class="pulse-css"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="list-unstyled">
                                <li class="media dropdown-item">
                                    <span class="success"><i class="ti-user"></i></span>
                                    <div class="media-body">
                                        <a href="#">
                                            <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="media dropdown-item">
                                    <span class="primary"><i class="ti-shopping-cart"></i></span>
                                    <div class="media-body">
                                        <a href="#">
                                            <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="media dropdown-item">
                                    <span class="danger"><i class="ti-bookmark"></i></span>
                                    <div class="media-body">
                                        <a href="#">
                                            <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="media dropdown-item">
                                    <span class="primary"><i class="ti-heart"></i></span>
                                    <div class="media-body">
                                        <a href="#">
                                            <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="media dropdown-item">
                                    <span class="success"><i class="ti-image"></i></span>
                                    <div class="media-body">
                                        <a href="#">
                                            <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                            </ul>
                            <a class="all-notification" href="#">See all notifications <i
                                    class="ti-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-account"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="./app-profile.html" class="dropdown-item">
                                <i class="icon-user"></i>
                                <span class="ml-2">Profile </span>
                            </a>
                            <a href="./email-inbox.html" class="dropdown-item">
                                <i class="icon-envelope-open"></i>
                                <span class="ml-2">Inbox </span>
                            </a>
                            <a href="{{route('admin.login')}}" class="dropdown-item">
                                <i class="icon-key"></i>
                                <span class="ml-2">Logout </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const globalSearchInput = document.getElementById('globalSearchInput');
    const searchModule = document.getElementById('searchModule');
    const searchResults = document.getElementById('searchResults');
    let searchTimeout;

    function performGlobalSearch() {
        const query = globalSearchInput.value.trim();
        const module = searchModule.value;
        
        if (query.length < 2) {
            searchResults.innerHTML = '';
            searchResults.style.display = 'none';
            return;
        }

        // Show results container
        searchResults.style.display = 'block';

        // Clear previous timeout
        clearTimeout(searchTimeout);
        
        // Set new timeout for debounced search
        searchTimeout = setTimeout(() => {
            searchResults.innerHTML = '<div class="text-center p-2"><i class="mdi mdi-loading mdi-spin"></i> Searching...</div>';
            
            fetch('/admin/global-search', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    query: query,
                    module: module
                })
            })
            .then(response => response.json())
            .then(data => {
                displaySearchResults(data);
            })
            .catch(error => {
                searchResults.innerHTML = '<div class="text-danger p-2">Search error occurred</div>';
            });
        }, 200);
    }

    function displaySearchResults(results) {
        if (results.length === 0) {
            searchResults.innerHTML = '<div class="text-muted p-2">No results found</div>';
            return;
        }

        let html = '';
        results.forEach(result => {
            html += `
                <div class="search-result-item p-2 border-bottom">
                    <a href="${result.url}" class="text-decoration-none">
                        <div class="d-flex justify-content-between">
                            <div>
                                <strong>${result.customer_name}</strong>
                                <small class="text-muted d-block">${result.module} - Order #${result.id}</small>
                            </div>
                            <small class="text-primary">${result.category || ''}</small>
                        </div>
                    </a>
                </div>
            `;
        });
        searchResults.innerHTML = html;
    }

    globalSearchInput.addEventListener('input', performGlobalSearch);
    searchModule.addEventListener('change', performGlobalSearch);
});
</script>