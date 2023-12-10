<x-app-layout title="Homepage">
    <x-home-box-intro/>
    <div class="togue">
        <div class="togue__wrapper">
            <span class="sponsored_by">Support By</span>
        </div>
    </div>
    <div class="container">
        <section class="support">
            <div class="w-full">
                <div class="lists_suported md:gap-4 md:my-[40px] md:w-8/12 mx-auto grid md:grid-cols-4 grid-cols-3">
                    <div class="support_item">
                        <img class="w-full  cursor-pointer hover:scale-75 transition-transform duration-100"
                            src="https://www.ibf.iisia.or.id/storage//filemanager/iisia.jpg" alt="">
                    </div>
                    <div class="support_item">
                        <img class="w-full cursor-pointer hover:scale-75 transition-transform duration-100"
                            src="https://www.ibf.iisia.or.id/storage//filemanager/forum-iisia.jpg" alt="">
                    </div>
                    <div class="support_item">
                        <img class="w-full cursor-pointer hover:scale-75 transition-transform duration-100"
                            src="https://www.ibf.iisia.or.id/storage//filemanager/kadin.jpg" alt="">
                    </div>
                    <div class="support_item">
                        <img class="w-full cursor-pointer hover:scale-75 transition-transform duration-100"
                            src="https://www.ibf.iisia.or.id/storage//filemanager/logo%20kemenperin2.png"
                            alt="">
                    </div>
                </div>
            </div>
        </section>
       <x-home-about-section/>
    </div>
    <section class="misi_kami mt-9 bg-gray-200 w-full">
        <div class="container">
            <div class="md:flex md:p-5 py-5 gap-4">
                <div class="w-full md:w-4/12">
                    <div class="p-2 text-center md:text-left">
                        <span class="block text-orange-600 font-bold">PAGUYUBAN GEGER HANJUANG</span>
                        <span class="text-2xl">
                            MISI KAMI
                        </span>
                    </div>

                </div>
                <div class="w-full md:w-8/12">
                    <div class="misi_lists">
                        <div class="grid misi_items grid-cols-1 md:grid-cols-2 gap-3 md:gap-4">
                            @foreach (range(1, 4) as $item)
                                <div class="misi_item pt-16">
                                    <div class="content text-justify px-3">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur minima eum
                                        voluptatibus, commodi ullam, exercitationem natus enim nisi ea in laborum
                                        excepturi
                                        eveniet fugiat? Perspiciatis autem repudiandae eos quod impedit.
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
       <x-home-section-team/>
    </section>
    <x-footer />
</x-app-layout>
