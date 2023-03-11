<div class="h-screen flex flex-col sticky top-0 justify-between bg-blue-500 shadow-xl p-5 text-xl font-bold ">
    <div class="order-1">
        <ul>
            <li>
                <a class="mt-5 text-white block hover:text-red-600" href="/dashboard">
                    Dashboard
                </a>
            </li>
            <li>
                <a class="mt-5 text-white block hover:text-red-600" href="/products">
                    Kelola Data Produk
                </a>
            </li>
        </ul>
    </div>
    <div class="order-2">
        <form class="text-red" action="/logout" method="POST">
            @csrf
            <button type="submit">
                <span class="text-black hover:text-red-600 block">Logout</span>
            </button>
        </form>
    </div>

</div>
