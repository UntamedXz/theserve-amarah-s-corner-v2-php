<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <title>Admin Panel</title>
</head>

<body>
    <div id="preloader"></div>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <div class="logo__details">
            <img src="../assets/images/official_logo_crop.png" alt="logo">
            <h1>Amarah's Corner</h1>
        </div>
        <ul class="side-menu">
            <li><a href="#" class="active"><i class='bx bxs-dashboard icon'></i>Dashboard</a></li>
            <li class="divider" data-text="social">Social</li>
            <li>
                <a href="#"><i class='bx bx-edit icon'></i>Updates <i class="bx bx-chevron-right icon-right"></i></a>
                <ul class="side-dropdown">
                    <li><a href="#">Insert Update</a></li>
                    <li><a href="#">View Update</a></li>
                </ul>
            </li>
            <li><a href="#"><i class='bx bx-chat icon'></i>Messages</a></li>
            <li class="divider" data-text="categories">Categories</li>
            <li>
                <a href="#"><i class='bx bxs-category icon'></i>Category <i
                        class="bx bx-chevron-right icon-right"></i></a>
                <ul class="side-dropdown">
                    <li><a href="#">Insert Category</a></li>
                    <li><a href="#">View Category</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class='bx bxs-category-alt icon'></i>Sub Category <i
                        class="bx bx-chevron-right icon-right"></i></a>
                <ul class="side-dropdown">
                    <li><a href="#">Insert Sub Category</a></li>
                    <li><a href="#">View Sub Category</a></li>
                </ul>
            </li>
            <li class="divider" data-text="social">Product</li>
            <li>
                <a href="#"><i class='bx bx-list-ul icon'></i>Product Attributes <i
                        class="bx bx-chevron-right icon-right"></i></a>
                <ul class="side-dropdown">
                    <li><a href="#">Insert Product Attributes</a></li>
                    <li><a href="#">View Product Attributes</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class='bx bxs-bowl-hot icon'></i>Products <i
                        class="bx bx-chevron-right icon-right"></i></a>
                <ul class="side-dropdown">
                    <li><a href="#">Insert Product</a></li>
                    <li><a href="#">View Product</a></li>
                </ul>
            </li>
            <li class="divider" data-text="orders">orders</li>
            <li>
                <a href="#"><i class='bx bxs-cart icon'></i>Orders</a>
            </li>
            <li class="divider" data-text="settings">settings</li>
            <li>
                <a href="#"><i class='bx bxs-user-circle icon'></i>Users <i
                        class="bx bx-chevron-right icon-right"></i></a>
                <ul class="side-dropdown">
                    <li><a href="#">Insert User</a></li>
                    <li><a href="#">View User</a></li>
                </ul>
                <a href="#"><i class='bx bxs-palette icon'></i>Home Appearance</a>
                <a href="#"><i class='bx bxs-cog icon'></i>Admin Settings</a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- NAVBAR -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class="bx bx-menu toggle-sidebar"></i>
            <form action="#" class="search-form">
                <div class="form-group">
                    <input type="text" placeholder="Search here...">
                    <i class="bx bx-search icon"></i>
                </div>
            </form>
            <div class="right">
                <div class="icons">
                    <a href="#" id="search-btn" class="nav-link">
                        <i class="bx bx-search icon"></i>
                    </a>
                    <a href="#" class="nav-link">
                        <i class="bx bxs-bell"></i>
                        <span class="badge">5</span>
                    </a>
                    <a href="#" class="nav-link">
                        <i class="bx bxs-message-square-dots"></i>
                        <span class="badge">8</span>
                    </a>
                </div>
                <span class="divider"></span>
                <div class="profile">
                    <img src="../assets/images/Eramie.jpg">
                    <ul class="profile-link">
                        <li><a href="#"><i class="bx bxs-user-circle icon"></i>Profile</a></li>
                        <li><a href="#"><i class="bx bxs-cog"></i>Settings</a></li>
                        <li><a href="#"><i class="bx bxs-log-out-circle"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- NAVBAR -->

        <div id="overlay" class="hide"></div>

        <!-- MAIN -->
        <main>
            <h1 class="title">Dashboard</h1>
            <ul class="breadcrumbs">
                <li><a href="#">Home</a></li>
                <li class="divider">/</li>
                <li><a href="#" class="active">Dashboard</a></li>
            </ul>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis cupiditate, commodi voluptas excepturi
                temporibus cum id, eos laudantium dicta optio delectus laboriosam architecto recusandae ea magni dolorem
                possimus non dolore tempora voluptates provident sequi minus explicabo deserunt? Cumque explicabo
                officia modi soluta ab ex a maxime, voluptate reiciendis dolorum deleniti. Sit asperiores laboriosam,
                odio tenetur quia voluptatem molestias impedit ipsa. Doloribus magnam nemo nulla odio ratione impedit
                sit sint possimus ea explicabo. Nostrum sint, quos quisquam facilis voluptas delectus rerum officiis aut
                odit blanditiis. Veritatis cupiditate, distinctio blanditiis corrupti perferendis nesciunt, vel
                consequuntur dicta ipsam, sed optio! Doloribus illo possimus porro placeat culpa corrupti veniam
                molestiae nostrum eligendi omnis, tempora itaque in? Quaerat enim velit nam eaque ipsam atque! Fugit
                rerum aspernatur ipsa amet dignissimos explicabo illo? Excepturi consequuntur autem rem dolores eius
                ipsam laboriosam in praesentium quae iusto! Numquam consectetur at iure ducimus quae ullam vitae odio
                perspiciatis reiciendis, corporis incidunt asperiores. Corrupti iure id doloribus, esse tempore odit
                libero, beatae incidunt deleniti earum sed ex placeat impedit numquam quam totam nostrum sint, velit
                nam? Consectetur illum quae iusto optio non, eos architecto in numquam explicabo tempore quis molestiae
                tempora necessitatibus. Expedita ratione minima nemo consequatur perspiciatis ut dolore modi voluptas
                similique accusantium? Voluptate excepturi praesentium iusto deserunt soluta, quos quibusdam assumenda
                delectus, similique aut odit tempore, a totam aspernatur nostrum omnis dignissimos possimus minima
                commodi consectetur est et sed. Animi accusamus libero consequatur, odit magni tempora voluptatem
                perferendis ut quis odio accusantium. Nesciunt libero consectetur magni ea. Vitae laboriosam, molestias
                fugit voluptatem explicabo minima? Consequatur neque non aut mollitia, possimus quod soluta
                necessitatibus iusto delectus. Laboriosam dolorem accusantium iure at sequi cum, alias odio saepe
                obcaecati doloribus nostrum, recusandae commodi corporis, ut aliquid voluptatem dolore! Iusto quia,
                eaque sunt eius accusantium expedita voluptatum. Nostrum facilis ullam dicta tempora eum impedit dolore
                optio, quos explicabo atque, similique laudantium rerum voluptas alias placeat officia nam vel
                necessitatibus amet doloribus velit! Autem ad quaerat nisi molestiae minus necessitatibus consequatur
                harum! Blanditiis dolorum labore commodi fugiat dicta? Sapiente excepturi quae repellendus magni
                incidunt modi quo, repudiandae ullam quasi error, totam officia tempore quaerat quas libero aperiam
                dicta quidem. Optio magnam, atque sint possimus reprehenderit repellat suscipit labore beatae alias ab
                minus corporis voluptas amet ex blanditiis facere in. Odit harum facere maiores optio sequi, nobis
                consequatur quos, in dolorum officiis magnam velit praesentium hic ipsum non aliquam veniam quasi
                quaerat! Atque, aliquid numquam beatae velit repudiandae possimus necessitatibus praesentium. Molestias
                est quaerat unde architecto ut quisquam nostrum, fugiat dignissimos exercitationem laudantium, eum
                debitis. Officiis neque sequi debitis quis quibusdam facere consectetur et accusamus eum illo, dicta
                tempora enim distinctio quod magni doloremque corrupti non, error maxime. Labore, rem consequuntur.
                Modi, a voluptatibus. Eaque facere magni architecto, dolore ea, voluptatem accusamus, vitae eos
                praesentium enim recusandae quidem. Distinctio corrupti labore expedita ea, dignissimos voluptatem
                aliquid doloribus nisi beatae laboriosam veniam incidunt ipsum? Impedit rerum ea excepturi ratione ipsum
                deserunt praesentium illo iste voluptate magnam vel sapiente, quas nesciunt neque. Delectus quis
                repellat recusandae molestiae? Soluta ab minus cupiditate officia esse eveniet dicta repellendus est,
                qui excepturi deserunt sunt nulla fuga, tempore, repellat aliquid blanditiis! Soluta, ipsa nobis ducimus
                iste quae quos, aspernatur exercitationem dolorum deserunt ex voluptatem iure hic culpa sed temporibus
                ut vitae eum! Optio, quas at? Dicta ut debitis omnis quod aperiam cum quia modi ipsum voluptatum,
                numquam iure dolores laborum dolor, velit magnam vero repudiandae necessitatibus nesciunt. Asperiores
                tempore praesentium mollitia modi vitae in facilis, laboriosam vel totam, at nisi provident magnam eum
                obcaecati molestias. Numquam temporibus atque corporis reiciendis at autem delectus consectetur.
                Sapiente consequuntur odit omnis repellendus impedit ipsa beatae natus et fugiat rerum blanditiis
                provident, at voluptatem earum reprehenderit, tenetur nesciunt enim quas architecto dolorem velit. Quis
                illum obcaecati laboriosam dolorem possimus vero accusantium sequi ea tenetur ducimus error, autem iste
                reprehenderit magni, corrupti nostrum. Magni soluta reiciendis earum! Iure quos corporis ab molestias
                velit quisquam, illum non omnis natus cupiditate vel rerum quam eveniet itaque amet ut? Eius, sapiente
                porro voluptatum corrupti facere sit cumque nihil veritatis obcaecati accusamus consequuntur ratione at
                similique error libero aspernatur assumenda, amet neque expedita a eum non magnam et. Dolores
                consequatur exercitationem suscipit repellat nostrum sint, nam, iure error quaerat accusantium magni
                consectetur? Perspiciatis cumque neque quaerat eligendi minus asperiores in animi, quod veniam eius.
                Blanditiis veniam modi accusamus officiis tempora illo minus laudantium in enim corrupti pariatur odit
                necessitatibus possimus quod voluptate officia vero sit delectus nulla, culpa doloribus quasi molestias
                recusandae ipsum? Iste, officia maxime et explicabo molestiae assumenda blanditiis harum quo. Qui magnam
                unde necessitatibus praesentium culpa, nesciunt quos fugit eos minus nostrum architecto magni obcaecati
                saepe aspernatur quis quidem nisi animi rem. Nostrum, quae sunt sint aperiam soluta officia culpa iste
                molestias autem reiciendis voluptatem repellendus repellat eligendi quod libero dolores veritatis ut,
                laboriosam, eos quo adipisci laborum praesentium! Maxime eius optio voluptas, ea iure laboriosam. Rerum
                deserunt voluptatum at culpa nesciunt, doloremque quas, iusto enim dolore quam libero cum accusamus nam
                magnam officia laudantium sint voluptates inventore ab incidunt vel. Consequatur, incidunt, illum
                aliquam ad unde fugiat est excepturi eos praesentium delectus dolorum aut aperiam sapiente fugit ullam
                numquam reiciendis. Vel dicta neque esse iste dolores voluptas tenetur facilis et. Rem autem facere,
                temporibus, labore voluptatum voluptate eligendi odio quasi iste accusantium facilis minima eveniet
                distinctio nesciunt! Error, quidem fugit. Officia quos error aliquam quam dolorum delectus, impedit
                necessitatibus, minus dolor, voluptatem sapiente ducimus animi doloribus obcaecati consectetur suscipit
                voluptatibus. Quae, excepturi quos. Sunt est iure quaerat obcaecati, atque eaque, ducimus, facilis nobis
                provident beatae illo molestias quisquam sint. Magni, illo asperiores, odio laboriosam labore alias,
                ullam repellat accusantium sequi fuga eius. Dolore reprehenderit iusto dolorum voluptatum quasi velit
                autem officia! Illo consectetur quos, maiores consequuntur voluptas quam, vitae obcaecati nemo quisquam
                quas unde quis ea reiciendis totam suscipit animi laudantium molestias odio fugit possimus impedit
                itaque sunt. Eum rem autem fugiat recusandae quas, nulla ipsum delectus ipsam veniam expedita eveniet
                odit non quibusdam ea voluptatem natus hic. Minima, perspiciatis. Possimus magnam aperiam excepturi
                molestias?</p>
        </main>
        <!-- MAIN -->
    </section>
    <!-- NAVBAR -->

    <!-- SCRIPT -->
    <script>
        var loader = document.getElementById("preloader");

        window.addEventListener("load", function () {
            loader.style.display = "none";
        })
    </script>

    <script>
        // SEARCH FORM TOGGLE
        const searchForm = document.querySelector('.search-form');
        const searchBtn = document.querySelector('#search-btn');

        searchBtn.addEventListener('click', function () {
            searchForm.classList.toggle('active');
            console.log(searchForm);
        })

        // SIDEBAR DROPDOWN
        const allDropdwon = document.querySelectorAll('#sidebar .side-dropdown');
        const sidebar = document.getElementById('sidebar');
        allDropdwon.forEach(item => {
            const a = item.parentElement.querySelector('a:first-child');
            a.addEventListener('click', function (e) {
                e.preventDefault();

                if (!this.classList.contains('active')) {
                    allDropdwon.forEach(i => {
                        const aLink = i.parentElement.querySelector('a:first-child');

                        aLink.classList.remove('active');
                        i.classList.remove('show');
                    })
                }

                this.classList.toggle('active');
                item.classList.toggle('show');
            })
        })

        // SIDEBAR COLLAPSE
        const toggleSidebar = document.querySelector('nav .toggle-sidebar');
        const allSideDivider = document.querySelectorAll('#sidebar .divider')
        const overlay = document.getElementById('overlay');

        if (sidebar.classList.contains('hide')) {
            allSideDivider.forEach(item => {
                item.textContent = '-'
            })
            allDropdwon.forEach(item => {
                const a = item.parentElement.querySelector('a:first-child');
                a.classList.remove('active');
                item.classList.remove('show');
            })
        } else {
            allSideDivider.forEach(item => {
                item.textContent = item.dataset.text;
            })
        }

        toggleSidebar.addEventListener('click', function () {
            sidebar.classList.toggle('hide');
            overlay.classList.toggle('active');

            if (sidebar.classList.contains('hide')) {
                allSideDivider.forEach(item => {
                    item.textContent = '-'
                })
                allDropdwon.forEach(item => {
                    const a = item.parentElement.querySelector('a:first-child');
                    a.classList.remove('active');
                    item.classList.remove('show');
                })
            } else {
                allSideDivider.forEach(item => {
                    item.textContent = item.dataset.text;
                })
            }
        })

        sidebar.addEventListener('mouseleave', function () {
            if (this.classList.contains('hide')) {
                allDropdwon.forEach(item => {
                    const a = item.parentElement.querySelector('a:first-child');
                    a.classList.remove('active');
                    item.classList.remove('show');
                })
                allSideDivider.forEach(item => {
                    item.textContent = '-'
                })
            }
        })

        sidebar.addEventListener('mouseenter', function () {
            if (this.classList.contains('hide')) {
                allDropdwon.forEach(item => {
                    const a = item.parentElement.querySelector('a:first-child');
                    a.classList.remove('active');
                    item.classList.remove('show');
                })
                allSideDivider.forEach(item => {
                    item.textContent = item.dataset.text;
                })
            }
        })

        overlay.addEventListener('click', function () {
            sidebar.classList.toggle('hide');
            overlay.classList.remove('active');
            searchForm.classList.remove('active');
            allSideDivider.forEach(item => {
                item.textContent = '-'
            })
        })

        if (screen.width < 768) {
            sidebar.classList.toggle('hide');
            allDropdwon.forEach(item => {
                const a = item.parentElement.querySelector('a:first-child');
                a.classList.remove('active');
                item.classList.remove('show');
            })
            allSideDivider.forEach(item => {
                item.textContent = '-'
            })
        } else {
            sidebar.classList.remove('hide');
            allDropdwon.forEach(item => {
                const a = item.parentElement.querySelector('a:first-child');
                a.classList.remove('active');
                item.classList.remove('show');
            })
            allSideDivider.forEach(item => {
                item.textContent = item.dataset.text;
            })
        }

        // window.addEventListener("resize", function () {
        //     if (screen.width < 768) {
        //         console.log(screen.width);
        //         sidebar.classList.toggle('hide');
        //         allDropdwon.forEach(item => {
        //             const a = item.parentElement.querySelector('a:first-child');
        //             a.classList.remove('active');
        //             item.classList.remove('show');
        //         })
        //         allSideDivider.forEach(item => {
        //             item.textContent = '-'
        //         })
        //     } else {
        //         sidebar.classList.remove('hide');
        //         allDropdwon.forEach(item => {
        //             const a = item.parentElement.querySelector('a:first-child');
        //             a.classList.remove('active');
        //             item.classList.remove('show');
        //         })
        //         allSideDivider.forEach(item => {
        //             item.textContent = item.dataset.text;
        //         })
        //     }
        // })

        // PROFILE DROPDOWN
        const profile = document.querySelector('nav .profile');
        const imgProfile = profile.querySelector('img');
        const dropdownProfile = profile.querySelector('.profile-link');

        imgProfile.addEventListener('click', function () {
            dropdownProfile.classList.toggle('show');
        })

        window.addEventListener('click', function (e) {
            if (e.target !== imgProfile) {
                if (e.target !== dropdownProfile) {
                    if (dropdownProfile.classList.contains('show')) {
                        dropdownProfile.classList.remove('show');
                    }
                }
            }
        })
    </script>
    <!-- SCRIPT -->
</body>

</html>