<nav class="space-y-6">
    <header class="flex justify-between">
        <p class="text-small">
            A Safer World For The Truth is a collaborative project between Free Press Unlimited (FPU), Committee to Protect Journalists (CPJ) and Reporters Without Borders (RSF).
        </p>

    </header>
    <icon-Logo/></icon-Logo>
    <div class="flex items-center gap-x-2">
        <p class="text-small">
            The data used in this Monument is drawn from a database of attacks on the press compiled by the Committee to Protect Journalists (CPJ). 
                <span class="underline">
                    Due to the time needed to verify each new case, it is possible that recent events have not yet been added to the Monument.
                </span>
            </p>
        </p>
        <hamburger-menu>
            <% loop $Menu(1) %>
                <a class="as-h1 hover:underline transition duration-300" href="$Link">
                    $MenuTitle
                </a>
            <% end_loop %>
        </hamburger-menu>
    </div>
</nav>