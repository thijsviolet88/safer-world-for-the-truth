 <nav class="pt-16 container space-y-6 lg:space-y-10 animate-fade animate-once animate-duration-500 animate-delay-500 animate-ease-in">
    <header class="flex justify-between">
        <p class="text-small lg:w-1/2">
            A Safer World For The Truth is a collaborative project between Free Press Unlimited (FPU), Committee to Protect Journalists (CPJ) and Reporters Without Borders (RSF).
        </p>
        <% if $Locales %>
                <nav class="primary">
                    <ul class="flex gap-x-2">
                        <% loop $Locales %>
                            <% if IsPublished %>
                                <li class="{$LinkingMode} border font-thin text-grey p-2 uppercase">
                                    <a href="$Link.ATT" <% if $LinkingMode != 'invalid' %>rel="alternate"
                                    hreflang="$HrefLang"<% end_if %>>$Title.XML</a>
                                </li>
                            <% end_if %>
                        <% end_loop %>
                    </ul>
                </nav>
            </div>
        <% end_if %>
    </header>
    <a class="inline-block w-full" href="/">
        <icon-Logo/></icon-Logo>
    </a>
    <div class="flex items-center gap-x-10 lg:justify-between">
        <p class="text-small lg:w-1/2">
            The data used in this Monument is drawn from a database of attacks on the press compiled by the Committee to Protect Journalists (CPJ). 
                <span class="underline">
                    Due to the time needed to verify each new case, it is possible that recent events have not yet been added to the Monument.
                </span>
            </p>
        </p>
        <ul class="hidden lg:flex items-center gap-x-5">
            <% loop $Menu(1) %>
                <li>
                    <a href="$Link" class="{$LinkingMode} text-xl hover:underline transition-all duration-300 text-grey hover:text-black">
                        $MenuTitle
                    </a>
                </li>
            <% end_loop %>
        </ul>
        <hamburger-menu class="lg:hidden">
            <% loop $Menu(1) %>
                <a class="as-h1 hover:underline transition duration-300" href="$Link">
                    $MenuTitle
                </a>
            <% end_loop %>
        </hamburger-menu>
    </div>
</nav>