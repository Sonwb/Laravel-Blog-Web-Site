@extends('layouts.app')
@section( 'content')
<div class="image grid grid-cols-1  m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 black text-center">
            <h1 class="sm:text-white text-3xl uppercase font-blod text-shadow-md pb-14">
                Sende Bir geliştirici olmak ister misin ?
            </h1>
            <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-s uppercase">Daha fazlası</a>
        </div>
    </div>
</div>


<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2015/06/24/15/45/computer-820281_960_720.jpg" width="700" alt="">
    </div>
    <div class="m-auto sm:m-auto text-left w-4/5 text-gray-600 ">
        <h2 class="text-4xl font-extrabold text-gray-600"> Daha iyi olmak için mücadele web geliştiricisi</h2>
        <p class="py-8 text-gray-500 text-l">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, aliquid sapiente ipsam temporibus tempore illo dicta doloribus totam at voluptatibus sit odio eaque? Hic consectetur nihil praesentium mollitia, natus aliquam.
        </p>
        <p class="font-extrabold text-gray-600 text-l pb-9">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio beatae dolor quasi blanditiis tempora hic adipisci quia. Porro, quam tempora dolorum quisquam molestiae ipsam, commodi labore impedit autem maxime nulla?
        </p>
        <a href="/blog" class="uppercas bg-blue-500 text-gray-100 text-s  font-extrabold py-3 px-8 rounded-3xl">
            Daha Fazlasını Bul
        </a>
    </div>


</div>
<div class="text-center py-15">
    <span class="uppercase text-s text-gray-400">
        Blog
    </span>
    <h2 class="text-4xl font-bold py-10  ">
        Son Gönderiler
    </h2>
    <p class="m-auto w-4/5 text-gray-500">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. In quae perferendis modi ad ipsam minus ullam consequatur. Sapiente temporibus aliquam excepturi nulla dolorem nam natus quasi omnis non, ab iste!</p>
</div>
<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-700  text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">
                PHP
            </span>
            <h3 class="text-xl font-bold py-10">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero quaerat iusto, reiciendis nihil architecto accusamus numquam eaque necessitatibus quibusdam nemo beatae magnam animi voluptatem. Minima placeat officia voluptatibus repudiandae neque!
            </h3>
            <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-200 text-xs font-extrabold py-3 px-5 rounded-3xl ">
                Daha Fazlası
            </a>
        </div>
    </div>
    <div>
        <img src="https://cdn.pixabay.com/photo/2015/06/24/15/45/computer-820281_960_720.jpg" width="700" alt="">
    </div>
</div>
@endsection
