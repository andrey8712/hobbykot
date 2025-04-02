<script setup lang="ts">
import {Button} from "@/components/ui/button";
import {SlidersHorizontal, ArrowDownUp, ArrowUp, ArrowDown} from "lucide-vue-next";
import {DropdownMenu, DropdownMenuContent, DropdownMenuItem, DropdownMenuTrigger} from "@/components/ui/dropdown-menu";
import {
    NumberField,
    NumberFieldContent,
    NumberFieldDecrement,
    NumberFieldIncrement,
    NumberFieldInput
} from "@/components/ui/number-field";
import {Checkbox} from "@/components/ui/checkbox";
import Header from "@/front/Header.vue";
import {Link} from "@inertiajs/vue3";
</script>

<template>
    <Header/>
    <div class="w-full  pt-[30px] pb-[60px]">
        <div class="w-full">
            <div class="container-x mx-auto">
                <div class="breadcrumb-wrapper font-400 text-[13px] text-qblack mb-[23px]">
                <span>
                    <a href="/">
                        <span class="mx-1 capitalize">Каталог</span>
                    </a>
                    <span class="sperator">/</span>
                </span>
                </div>
                <div class="w-full lg:flex lg:space-x-[30px]">
                    <div class="lg:w-[270px]">
                        <div class="filter-widget w-full fixed lg:relative left-0 top-0 h-screen z-10 lg:h-auto overflow-y-scroll lg:overflow-y-auto bg-gray-100 px-[30px] pt-[20px] pb-[20px]  hidden lg:block">
                            <div class="filter-subject-item pb-4">
                                <h3 class="text-black text-base font-500">Размеры, мм</h3>
                            </div>
                            <div class="filter-items">
                                <div class="flex items-center space-x-2 pb-2">
                                    <Checkbox id="terms-1" />
                                    <label
                                        for="terms-1"
                                        class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                    >
                                        50х40
                                    </label>
                                </div>
                                <div class="flex items-center space-x-2 pb-2">
                                    <Checkbox id="terms-1" />
                                    <label
                                        for="terms-2"
                                        class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                    >
                                        60х50
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="filter-widget w-full fixed lg:relative left-0 top-0 h-screen z-10 lg:h-auto overflow-y-scroll lg:overflow-y-auto bg-gray-100 px-[30px] pt-[20px] pb-[20px]  hidden lg:block">
                            <div class="filter-subject-item pb-4">
                                <h3 class="text-black text-base font-500">Сюжет</h3>
                            </div>
                            <div class="filter-items">
                                <div class="flex items-center space-x-2 pb-2">
                                    <Checkbox id="terms-1" />
                                    <label
                                        for="terms-1"
                                        class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                    >
                                        Городской пейзаж
                                    </label>
                                </div>
                                <div class="flex items-center space-x-2 pb-2">
                                    <Checkbox id="terms-1" />
                                    <label
                                        for="terms-2"
                                        class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                    >
                                        Люди
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="products-sorting w-full bg-gray-100 md:h-[70px] flex md:flex-row flex-col md:space-y-0 space-y-5 md:justify-between md:items-center p-[30px] mb-[40px]">
                            <div>
                                <p class="font-400 text-[13px]">
                                    <span class="text-qgray"> На странице</span> 1–16 из 66 товаров
                                </p>
                            </div>
                            <div class="flex space-x-3 justify-between">
                                <DropdownMenu>
                                    <DropdownMenuTrigger class="text-sm text-gray-700 hover:text-gray-900 inline-flex items-center justify-center gap-2 whitespace-nowrap "><ArrowDownUp class="w-4 h-4 mr-1"/> Сортировка </DropdownMenuTrigger>
                                    <DropdownMenuContent>
                                        <DropdownMenuItem>
                                            <ArrowUp class="mr-2 h-4 w-4" />
                                            <span>Цена</span>
                                        </DropdownMenuItem>
                                        <DropdownMenuItem>
                                            <ArrowDown class="mr-2 h-4 w-4" />
                                            <span>Цена</span>
                                        </DropdownMenuItem>
                                    </DropdownMenuContent>
                                </DropdownMenu>
                                <button type="button" class="w-10 lg:hidden h-10 rounded flex justify-center items-center">
                                    <SlidersHorizontal class="w-6 h-6 mr-2"/>
                                </button>
                            </div>
                        </div>
                        <div class="grid xl:grid-cols-3 sm:grid-cols-2 grid-cols-1  xl:gap-[30px] gap-5 mb-[40px]">
                            <div class="group relative">
                                <img src="https://ir.ozone.ru/s3/multimedia-f/wc1000/6883877787.jpg" alt="Front of men&#039;s Basic Tee in black." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-sm text-gray-700">
                                            <a href="#">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                Ласточкино гнездо в Крыму на подрамнике (картина стразами)
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="text-sm font-medium text-gray-900" style="color: #6b7fa3">11905₽</p>
                                </div>
                                <div class="mt-4 flex justify-between">
                                    <p class="text-sm text-gray-500">
                                        <NumberField id="age" :default-value="18" :min="0" style="width: 120px">
                                            <NumberFieldContent>
                                                <NumberFieldDecrement />
                                                <NumberFieldInput />
                                                <NumberFieldIncrement />
                                            </NumberFieldContent>
                                        </NumberField>
                                    </p>
                                    <Button class="bg-amber-500 h-10 px-8" style="background-color: #443472;">В корзину</Button>
                                </div>
                            </div>
                            <div class="group relative">
                                <img src="https://ir.ozone.ru/s3/multimedia-r/wc1000/6883877835.jpg" alt="Front of men&#039;s Basic Tee in black." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-sm text-gray-700">
                                            <a href="#">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                Ласточкино гнездо в Крыму на подрамнике (картина стразами)
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="text-sm font-medium text-gray-900">11905₽</p>
                                </div>
                                <div class="mt-4 flex justify-between">
                                    <p class="text-sm text-gray-500">
                                        <NumberField id="age" :default-value="18" :min="0" style="width: 120px">
                                            <NumberFieldContent>
                                                <NumberFieldDecrement />
                                                <NumberFieldInput />
                                                <NumberFieldIncrement />
                                            </NumberFieldContent>
                                        </NumberField>
                                    </p>
                                    <Button class="bg-amber-500 h-10 px-8" style="background-color: #443472;">В корзину</Button>
                                </div>
                            </div><div class="group relative">
                            <img src="https://ir.ozone.ru/s3/multimedia-1-b/wc1000/7295128319.jpg" alt="Front of men&#039;s Basic Tee in black." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Ласточкино гнездо в Крыму на подрамнике (картина стразами)
                                        </a>
                                    </h3>
                                </div>
                                <p class="text-sm font-medium text-gray-900">11905₽</p>
                            </div>
                            <div class="mt-4 flex justify-between">
                                <p class="text-sm text-gray-500">
                                    <NumberField id="age" :default-value="18" :min="0" style="width: 120px">
                                        <NumberFieldContent>
                                            <NumberFieldDecrement />
                                            <NumberFieldInput />
                                            <NumberFieldIncrement />
                                        </NumberFieldContent>
                                    </NumberField>
                                </p>
                                <Button class="bg-amber-500 h-10 px-8" style="background-color: #443472;">В корзину</Button>
                            </div>
                        </div><div class="group relative">
                            <img src="https://ir.ozone.ru/s3/multimedia-1-b/wc1000/7295128319.jpg" alt="Front of men&#039;s Basic Tee in black." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Ласточкино гнездо в Крыму на подрамнике (картина стразами)
                                        </a>
                                    </h3>
                                </div>
                                <p class="text-sm font-medium text-gray-900">11905₽</p>
                            </div>
                            <div class="mt-4 flex justify-between">
                                <p class="text-sm text-gray-500">
                                    <NumberField id="age" :default-value="18" :min="0" style="width: 120px">
                                        <NumberFieldContent>
                                            <NumberFieldDecrement />
                                            <NumberFieldInput />
                                            <NumberFieldIncrement />
                                        </NumberFieldContent>
                                    </NumberField>
                                </p>
                                <Button class="bg-amber-500 h-10 px-8" style="background-color: #443472;">В корзину</Button>
                            </div>
                        </div><div class="group relative">
                            <img src="https://ir.ozone.ru/s3/multimedia-1-b/wc1000/7295128319.jpg" alt="Front of men&#039;s Basic Tee in black." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Ласточкино гнездо в Крыму на подрамнике (картина стразами)
                                        </a>
                                    </h3>
                                </div>
                                <p class="text-sm font-medium text-gray-900">11905₽</p>
                            </div>
                            <div class="mt-4 flex justify-between">
                                <p class="text-sm text-gray-500">
                                    <NumberField id="age" :default-value="18" :min="0" style="width: 120px">
                                        <NumberFieldContent>
                                            <NumberFieldDecrement />
                                            <NumberFieldInput />
                                            <NumberFieldIncrement />
                                        </NumberFieldContent>
                                    </NumberField>
                                </p>
                                <Button class="bg-amber-500 h-10 px-8" style="background-color: #443472;">В корзину</Button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col mx-3 bg-white rounded-lg">
        <div class="w-full draggable">
            <div class="container flex flex-col mx-auto">
                <div class="flex flex-col items-center w-full mt-6">
                    <span class="mb-4">
                        <Link
                            :href="route('home')"
                            class=""
                        >
                            <img class="h-24 w-auto" src="/img/22aaf6fa-d6b2-44a9-80ac-2233a7bc945e.jpg" alt="">
                        </Link>
                    </span>
                    <div class="flex flex-col items-center gap-6 mb-4">
                        <div class="flex flex-wrap items-center justify-center gap-5 lg:gap-12 gap-y-3 lg:flex-nowrap text-dark-grey-900">
                            <a href="#" class="text-gray-700 hover:text-gray-900">Каталог</a>
                            <a href="#" class="text-gray-700 hover:text-gray-900">Оплата и доставка</a>
                            <a href="#" class="text-gray-700 hover:text-gray-900">О нас</a>
                            <a href="#" class="text-gray-700 hover:text-gray-900">Контакты</a>
                            <!--                            <a href="https://t.me/+fxOFrSibCBY2MDZi" target="_blank" class="text-sm/6 font-semibold text-gray-900 mr-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" class="lucide w-8 h-8 mr-1" viewBox="0 0 48 48">
                                                                <path fill="#29b6f6" d="M24 4A20 20 0 1 0 24 44A20 20 0 1 0 24 4Z"></path><path fill="#fff" d="M33.95,15l-3.746,19.126c0,0-0.161,0.874-1.245,0.874c-0.576,0-0.873-0.274-0.873-0.274l-8.114-6.733 l-3.97-2.001l-5.095-1.355c0,0-0.907-0.262-0.907-1.012c0-0.625,0.933-0.923,0.933-0.923l21.316-8.468 c-0.001-0.001,0.651-0.235,1.126-0.234C33.667,14,34,14.125,34,14.5C34,14.75,33.95,15,33.95,15z"></path><path fill="#b0bec5" d="M23,30.505l-3.426,3.374c0,0-0.149,0.115-0.348,0.12c-0.069,0.002-0.143-0.009-0.219-0.043 l0.964-5.965L23,30.505z"></path><path fill="#cfd8dc" d="M29.897,18.196c-0.169-0.22-0.481-0.26-0.701-0.093L16,26c0,0,2.106,5.892,2.427,6.912 c0.322,1.021,0.58,1.045,0.58,1.045l0.964-5.965l9.832-9.096C30.023,18.729,30.064,18.416,29.897,18.196z"></path>
                                                            </svg>
                                                        </a>-->
                        </div>
                        <!--                        <div class="flex items-center gap-8">
                                                    <a href="javascript:void(0)" class="text-grey-700 hover:text-grey-900">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6348 20.7273V12.766H16.3582L16.7668 9.66246H13.6348V7.68128C13.6348 6.78301 13.8881 6.17085 15.2029 6.17085L16.877 6.17017V3.39424C16.5875 3.35733 15.5937 3.27273 14.437 3.27273C12.0216 3.27273 10.368 4.71881 10.368 7.37391V9.66246H7.63636V12.766H10.368V20.7273H13.6348Z" fill="currentColor"/>
                                                            <mask id="mask0_3320_6483" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="7" y="3" width="10" height="18">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6348 20.7273V12.766H16.3582L16.7668 9.66246H13.6348V7.68128C13.6348 6.78301 13.8881 6.17085 15.2029 6.17085L16.877 6.17017V3.39424C16.5875 3.35733 15.5937 3.27273 14.437 3.27273C12.0216 3.27273 10.368 4.71881 10.368 7.37391V9.66246H7.63636V12.766H10.368V20.7273H13.6348Z" fill="white"/>
                                                            </mask>
                                                            <g mask="url(#mask0_3320_6483)">
                                                            </g>
                                                        </svg>
                                                    </a>
                                                    <a href="javascript:void(0)" class="text-grey-700 hover:text-grey-900">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.8182 6.14597C21.1356 6.44842 20.4032 6.65355 19.6337 6.74512C20.4194 6.27461 21.0208 5.5283 21.3059 4.64176C20.5689 5.07748 19.7553 5.39388 18.8885 5.56539C18.1943 4.82488 17.207 4.36364 16.1118 4.36364C14.0108 4.36364 12.3072 6.06718 12.3072 8.16706C12.3072 8.46488 12.3408 8.75576 12.4058 9.03391C9.24436 8.87512 6.44106 7.36048 4.56485 5.05894C4.23688 5.61985 4.0503 6.27342 4.0503 6.97109C4.0503 8.29106 4.72246 9.45573 5.74227 10.1371C5.11879 10.1163 4.53239 9.94476 4.01903 9.65967V9.70718C4.01903 11.5498 5.33088 13.0876 7.07033 13.4376C6.75164 13.5234 6.41558 13.5709 6.06791 13.5709C5.82224 13.5709 5.58467 13.5465 5.35173 13.5002C5.83612 15.0125 7.2407 16.1123 8.90485 16.1424C7.60343 17.1622 5.96246 17.7683 4.18012 17.7683C3.87303 17.7683 3.57055 17.7498 3.27273 17.7162C4.95658 18.7974 6.95564 19.4278 9.10418 19.4278C16.1026 19.4278 19.9281 13.6312 19.9281 8.60397L19.9153 8.11145C20.6628 7.57833 21.3094 6.90851 21.8182 6.14597Z" fill="currentColor"/>
                                                            <mask id="mask0_3320_6484" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="3" y="4" width="19" height="16">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.8182 6.14597C21.1356 6.44842 20.4032 6.65355 19.6337 6.74512C20.4194 6.27461 21.0208 5.5283 21.3059 4.64176C20.5689 5.07748 19.7553 5.39388 18.8885 5.56539C18.1943 4.82488 17.207 4.36364 16.1118 4.36364C14.0108 4.36364 12.3072 6.06718 12.3072 8.16706C12.3072 8.46488 12.3408 8.75576 12.4058 9.03391C9.24436 8.87512 6.44106 7.36048 4.56485 5.05894C4.23688 5.61985 4.0503 6.27342 4.0503 6.97109C4.0503 8.29106 4.72246 9.45573 5.74227 10.1371C5.11879 10.1163 4.53239 9.94476 4.01903 9.65967V9.70718C4.01903 11.5498 5.33088 13.0876 7.07033 13.4376C6.75164 13.5234 6.41558 13.5709 6.06791 13.5709C5.82224 13.5709 5.58467 13.5465 5.35173 13.5002C5.83612 15.0125 7.2407 16.1123 8.90485 16.1424C7.60343 17.1622 5.96246 17.7683 4.18012 17.7683C3.87303 17.7683 3.57055 17.7498 3.27273 17.7162C4.95658 18.7974 6.95564 19.4278 9.10418 19.4278C16.1026 19.4278 19.9281 13.6312 19.9281 8.60397L19.9153 8.11145C20.6628 7.57833 21.3094 6.90851 21.8182 6.14597Z" fill="white"/>
                                                            </mask>
                                                            <g mask="url(#mask0_3320_6484)">
                                                            </g>
                                                        </svg>
                                                    </a>
                                                    <a href="javascript:void(0)" class="text-grey-700 hover:text-grey-900">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M12 3C7.0275 3 3 7.13211 3 12.2284C3 16.3065 5.5785 19.7648 9.15375 20.9841C9.60375 21.0709 9.76875 20.7853 9.76875 20.5403C9.76875 20.3212 9.76125 19.7405 9.7575 18.9712C7.254 19.5277 6.726 17.7332 6.726 17.7332C6.3165 16.6681 5.72475 16.3832 5.72475 16.3832C4.9095 15.8111 5.78775 15.8229 5.78775 15.8229C6.6915 15.887 7.16625 16.7737 7.16625 16.7737C7.96875 18.1847 9.273 17.777 9.7875 17.5414C9.8685 16.9443 10.1003 16.5381 10.3575 16.3073C8.35875 16.0764 6.258 15.2829 6.258 11.7471C6.258 10.7399 6.60675 9.91659 7.18425 9.27095C7.083 9.03774 6.77925 8.0994 7.263 6.82846C7.263 6.82846 8.01675 6.58116 9.738 7.77462C10.458 7.56958 11.223 7.46785 11.988 7.46315C12.753 7.46785 13.518 7.56958 14.238 7.77462C15.948 6.58116 16.7017 6.82846 16.7017 6.82846C17.1855 8.0994 16.8818 9.03774 16.7917 9.27095C17.3655 9.91659 17.7142 10.7399 17.7142 11.7471C17.7142 15.2923 15.6105 16.0725 13.608 16.2995C13.923 16.5765 14.2155 17.1423 14.2155 18.0071C14.2155 19.242 14.2043 20.2344 14.2043 20.5341C14.2043 20.7759 14.3617 21.0647 14.823 20.9723C18.4237 19.7609 21 16.3002 21 12.2284C21 7.13211 16.9703 3 12 3Z" fill="currentColor"/>
                                                        </svg>
                                                    </a>
                                                    <a href="javascript:void(0)" class="text-grey-700 hover:text-grey-900">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                            <path d="M16.2 0H1.8C0.81 0 0 0.81 0 1.8V16.2C0 17.19 0.81 18 1.8 18H16.2C17.19 18 18 17.19 18 16.2V1.8C18 0.81 17.19 0 16.2 0ZM5.4 15.3H2.7V7.2H5.4V15.3ZM4.05 5.67C3.15 5.67 2.43 4.95 2.43 4.05C2.43 3.15 3.15 2.43 4.05 2.43C4.95 2.43 5.67 3.15 5.67 4.05C5.67 4.95 4.95 5.67 4.05 5.67ZM15.3 15.3H12.6V10.53C12.6 9.81004 11.97 9.18 11.25 9.18C10.53 9.18 9.9 9.81004 9.9 10.53V15.3H7.2V7.2H9.9V8.28C10.35 7.56 11.34 7.02 12.15 7.02C13.86 7.02 15.3 8.46 15.3 10.17V15.3Z" fill="currentColor"/>
                                                        </svg>
                                                    </a>
                                                    <a href="javascript:void(0)" class="text-grey-700 hover:text-grey-900">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.60063 2.18182H16.3991C19.3873 2.18182 21.8183 4.61281 21.8182 7.60074V16.3993C21.8182 19.3872 19.3873 21.8182 16.3991 21.8182H7.60063C4.6127 21.8182 2.18182 19.3873 2.18182 16.3993V7.60074C2.18182 4.61281 4.6127 2.18182 7.60063 2.18182ZM16.3993 20.0759C18.4266 20.0759 20.0761 18.4266 20.0761 16.3993H20.0759V7.60074C20.0759 5.57348 18.4265 3.92405 16.3991 3.92405H7.60063C5.57336 3.92405 3.92405 5.57348 3.92405 7.60074V16.3993C3.92405 18.4266 5.57336 20.0761 7.60063 20.0759H16.3993ZM6.85714 12.0001C6.85714 9.16424 9.16418 6.85714 12 6.85714C14.8358 6.85714 17.1429 9.16424 17.1429 12.0001C17.1429 14.8359 14.8358 17.1429 12 17.1429C9.16418 17.1429 6.85714 14.8359 6.85714 12.0001ZM8.62798 12C8.62798 13.8593 10.1407 15.3719 12 15.3719C13.8593 15.3719 15.372 13.8593 15.372 12C15.372 10.1406 13.8594 8.6279 12 8.6279C10.1406 8.6279 8.62798 10.1406 8.62798 12Z" fill="currentColor"/>
                                                            <mask id="mask0_3320_6487" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="2" y="2" width="20" height="20">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.60063 2.18182H16.3991C19.3873 2.18182 21.8183 4.61281 21.8182 7.60074V16.3993C21.8182 19.3872 19.3873 21.8182 16.3991 21.8182H7.60063C4.6127 21.8182 2.18182 19.3873 2.18182 16.3993V7.60074C2.18182 4.61281 4.6127 2.18182 7.60063 2.18182ZM16.3993 20.0759C18.4266 20.0759 20.0761 18.4266 20.0761 16.3993H20.0759V7.60074C20.0759 5.57348 18.4265 3.92405 16.3991 3.92405H7.60063C5.57336 3.92405 3.92405 5.57348 3.92405 7.60074V16.3993C3.92405 18.4266 5.57336 20.0761 7.60063 20.0759H16.3993ZM6.85714 12.0001C6.85714 9.16424 9.16418 6.85714 12 6.85714C14.8358 6.85714 17.1429 9.16424 17.1429 12.0001C17.1429 14.8359 14.8358 17.1429 12 17.1429C9.16418 17.1429 6.85714 14.8359 6.85714 12.0001ZM8.62798 12C8.62798 13.8593 10.1407 15.3719 12 15.3719C13.8593 15.3719 15.372 13.8593 15.372 12C15.372 10.1406 13.8594 8.6279 12 8.6279C10.1406 8.6279 8.62798 10.1406 8.62798 12Z" fill="white"/>
                                                            </mask>
                                                            <g mask="url(#mask0_3320_6487)">
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </div>-->
                    </div>
                    <div class="flex items-center">
                        <p class="text-sm font-normal leading-7 text-center text-grey-700">
                            2025 All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
