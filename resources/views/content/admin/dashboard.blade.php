@section('title', 'dashboard')
@extends('layouts.admin')
@section('content')

    <main class="w-full flex-grow p-6">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div class="search">
                <form action="{{ route('user.search') }}" method="get">@csrf
                    <label>
                        <input name="search" type="search" placeholder="Search..">
                    </label>
                </form>

            </div>

            <div class="user">
                <img src="assets/imgs/customer01.jpg" alt="">
            </div>
        </div>

        <div class="grid-1">
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">{{ $total_product }}</div>
                        <div class="cardName">Total Product</div>
                    </div>
    
                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>
    
                <div class="card">
                    <div>
                        <div class="numbers">{{ $total_order }}</div>
                        <div class="cardName">Total Order</div>
                    </div>
    
                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="cardBox">
    
                <div class="card">
                    <div>
                        <div class="numbers">৳{{ $total_revenue }}</div>
                        <div class="cardName">Total Revenue</div>
                    </div>
    
                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">{{ $total_user }}</div>
                        <div class="cardName">Total User</div>
                    </div>
    
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="cardBox">
    
                <div class="card">
                    <div>
                        <div class="numbers">{{ $total_delivered }}</div>
                        <div class="cardName">Order Delever</div>
                    </div>
    
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
    
                <div class="card">
                    <div>
                        <div class="numbers">{{ $total_processing }}</div>
                        <div class="cardName">Order Processing</div>
                    </div>
    
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
    
            </div>
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">{{ $total_vendor }}</div>
                        <div class="cardName">Total Vendor</div>
                    </div>
    
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">{{ $total_store }}</div>
                        <div class="cardName">Total Store</div>
                    </div>
    
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

        </div>
  
        <h1 class="text-3xl text-black pb-6">Tables</h1>

        <div class="w-full mt-6">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> All-Users
            </p>
            <div class="bg-white overflow-auto">

                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Address</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">utype</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Phone</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</td>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @forelse ($users as $user)
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">{{ $user->name }}</td>
                                <td class="w-1/3 text-left py-3 px-4">{{ $user->address }}</td>
                                <td>

                                    @if ($user->utype == 'user')
                                        <a onclick="return confirm('Are Your this Add Your Vendor')" class="btn-redirect"
                                            href="{{ route('ADM', $user->id) }}">user</a>
                                    @else
                                        {{-- <a onclick="return confirm('Are Your this product delivered')" class="btn-redirect" href="{{route('ADM',$user->id)}}">ADM</a> --}}
                                        <h1 style="color:aqua">Vendor</h1>
                                    @endif

                                </td>

                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="tel:+880{{ $user->phone }}">{{ $user->phone }}</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                            </tr>
                        @empty
                            <div>Not User Found</div>
                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>



        <div class="w-full mt-12">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> All Store
            </p>
            <div class="bg-white overflow-auto">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Store Name
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Rol
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Created at
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Store Owner
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($shops as $shop)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-full h-full rounded-full" src="/storage/shop/{{ $shop->image }}"
                                                alt="" />
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">

                                                <a href="{{ route('vendor.dashboard', $shop->id) }}">
                                                    {{ $shop->shop }}</a>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">Vendor <b>({{ $shop->name }})</b></p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $shop->created_at }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                        <span class="relative">{{ $shop->owner }}</span>
                                    </span>
                                </td>
                            </tr>
                        @endforeach

                        {{ $shops->links() }}

                    </tbody>
                </table>
            </div>
        </div>
    </main>



@endsection
