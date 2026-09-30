<footer>
    <div class="bg-secondary pt-10 pb-7 text-primary-light/70 ">
        <div class="container">
            <div class="grid grid-cols-12 gap-5 pt-5 pb-10">
                <div class="col-span-12 xl:col-span-4">
                    <div class="mb-4">
                        <div class="w-35">
                            <a href="{{ route('home.index') }}">
                                <img class="w-full" src="{{ asset('/assets/images/skillbridgewhite.png') }}"
                                    alt="skillbridge">
                            </a>
                        </div>
                    </div>
                    <div>
                        <p class="mb-4">
                            Bangladesh's small-task freelance marketplace. Connect with skilled
                            freelancers and get your tasks done.
                        </p>
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <i class="bi bi-geo-alt leading-none"></i>
                                <p>Merul Badda, Gulshan, Dhaka - 1212</p>
                            </div>
                            <div class="flex items-center gap-2 mb-2">
                                <i class="bi bi-telephone leading-none"></i>
                                <p>+8801345802911</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="bi bi-envelope leading-none"></i>
                                <p>info@skillbridge.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-3 xl:col-span-2">
                    <h2 class="text-primary-light font-medium text-xl mb-4">Marketplace</h2>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-primary-light">Browse tasks</a></li>
                        <li><a href="#" class="hover:text-primary-light">Find freelancers</a></li>
                        <li><a href="#" class="hover:text-primary-light">Post a task</a></li>
                        <li><a href="#" class="hover:text-primary-light">Pricing & fees</a></li>
                        <li><a href="#" class="hover:text-primary-light">Success stories</a></li>
                    </ul>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-3 xl:col-span-2">
                    <h2 class="text-primary-light font-medium text-xl mb-4">Company</h2>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-primary-light">About us</a></li>
                        <li><a href="#" class="hover:text-primary-light">How it works</a></li>
                        <li><a href="#" class="hover:text-primary-light">Careers</a></li>
                        <li><a href="#" class="hover:text-primary-light">Press</a></li>
                        <li><a href="#" class="hover:text-primary-light">Contact</a></li>
                    </ul>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-3 xl:col-span-2">
                    <h2 class="text-primary-light font-medium text-xl mb-4">Support</h2>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-primary-light">Help center</a></li>
                        <li><a href="#" class="hover:text-primary-light">FAQ</a></li>
                        <li><a href="#" class="hover:text-primary-light">Terms of service</a></li>
                        <li><a href="#" class="hover:text-primary-light">Privacy policy</a></li>
                        <li><a href="#" class="hover:text-primary-light">Report an issue</a></li>
                    </ul>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-3 xl:col-span-2">
                    <h2 class="text-primary-light font-medium text-xl mb-4">Get task alerts</h2>
                    <div class="mb-5">
                        <form>
                            <div class="flex items-center lg:flex-wrap gap-3">
                                <input type="email" name="email" required autocomplete="email"
                                    class="bg-primary-light/10 px-4 py-3 rounded-xl outline-none text-primary-light text-sm lg:w-full"
                                    placeholder="Email address">
                                <button
                                    class="px-6 py-3 lg:w-full rounded-xl text-primary-light bg-primary hover:bg-primary-dark duration-75 text-sm cursor-pointer">Join</button>
                            </div>
                        </form>
                    </div>
                    <div>
                        <p class="mb-2 text-sm">Pay with sslcommerz sandbox</p>
                        <img src="{{ asset('/assets/images/ssl.png') }}" alt="ssl" class="w-35">
                    </div>
                </div>
            </div>
        </div>
        <div class="border-t border-primary-light/10 pt-7">
            <div class="container">
                <div class="flex items-center gap-3 justify-center lg:justify-between flex-wrap lg:flex-nowrap">
                    <p class="text-sm">
                        &copy; {{ date('Y') }} SkillBridge • All Rights Reserved
                    </p>
                    <div>
                        <p class="text-sm">Design & Developed by Team <span class="text-primary-light">Web Dev</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
