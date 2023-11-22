$ElementalArea
<section class="container text-center font-light space-y-5 lg:space-y-24 border-b pb-10">
    <h2>Feel free to contact us. Here are a few ways to do that:</h2>
    <ul class="flex flex-col items-center gap-y-2 text-[1.6rem] lg:text-4xl">
        <li class="hover:underline">
            <a class="flex items-center gap-x-2" href="{$SiteConfig.X}" target="_blank">
                Via X
                <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" viewBox="0 0 185.343 185.343" xml:space="preserve">
                    <g>
                        <g>
                            <path style="fill:#010002;" d="M51.707,185.343c-2.741,0-5.493-1.044-7.593-3.149c-4.194-4.194-4.194-10.981,0-15.175    l74.352-74.347L44.114,18.32c-4.194-4.194-4.194-10.987,0-15.175c4.194-4.194,10.987-4.194,15.18,0l81.934,81.934    c4.194,4.194,4.194,10.987,0,15.175l-81.934,81.939C57.201,184.293,54.454,185.343,51.707,185.343z"/>
                        </g>
                    </g>
                </svg>
            </a>
        </li>
        <li class="hover:underline">
            <a class="flex items-center gap-x-2" href="mailto:{$SiteConfig.Email}">
                Via e-mail
                <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" viewBox="0 0 185.343 185.343" xml:space="preserve">
                    <g>
                        <g>
                            <path style="fill:#010002;" d="M51.707,185.343c-2.741,0-5.493-1.044-7.593-3.149c-4.194-4.194-4.194-10.981,0-15.175    l74.352-74.347L44.114,18.32c-4.194-4.194-4.194-10.987,0-15.175c4.194-4.194,10.987-4.194,15.18,0l81.934,81.934    c4.194,4.194,4.194,10.987,0,15.175l-81.934,81.939C57.201,184.293,54.454,185.343,51.707,185.343z"/>
                        </g>
                    </g>
                </svg>
            </a>
        </li>
        <li class="hover:underline">
            <a class="flex items-center gap-x-2" href="$SiteConfig.Facebook}" target="_blank">
                Via Facebook
                <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" viewBox="0 0 185.343 185.343" xml:space="preserve">
                    <g>
                        <g>
                            <path style="fill:#010002;" d="M51.707,185.343c-2.741,0-5.493-1.044-7.593-3.149c-4.194-4.194-4.194-10.981,0-15.175    l74.352-74.347L44.114,18.32c-4.194-4.194-4.194-10.987,0-15.175c4.194-4.194,10.987-4.194,15.18,0l81.934,81.934    c4.194,4.194,4.194,10.987,0,15.175l-81.934,81.939C57.201,184.293,54.454,185.343,51.707,185.343z"/>
                        </g>
                    </g>
                </svg>
            </a>
        </li>
    </ul>
</section>
<section class="px-10 pb-40 flex flex-row flex-wrap items-center justify-center gap-x-10 gap-y-10">
    <% loop $Logos %> 
        <figure>
            <img class="w-30" alt="{$Title}" src="{$URL}"/>
        </figure>
    <% end_loop %>
</section>
