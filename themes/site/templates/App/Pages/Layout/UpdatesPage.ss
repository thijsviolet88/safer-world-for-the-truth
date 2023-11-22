$ElementalArea
<section class="container pt-20">
    <%-- <ul class="flex flex-col">
        <% loop $UpdatesList %>
            <li class="my-7 lg:my-14">
                <a href="$Link" class="py-5 space-y-2 group lg:space-y-4">
                    <time class="block italic text-2xl font-light lg:text-3xl" datetime="{$Date}">{$Date.Format('MMMM dd, yyyy')}</time>
                    <h1 class="text-center">
                        {$Title}
                        <svg class="h-7 w-7 inline transistion-all duration-300 group-hover:translate-x-2 lg:inline-block lg:h-14 lg:w-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="_24x24_On_Light_Next" data-name="24x24/On Light/Next">
                            <rect id="view-box" width="24" height="24" fill="#141124" opacity="0"/>
                            <path id="Shape" d="M10.22,9.28a.75.75,0,0,1,0-1.06l2.72-2.72H.75A.75.75,0,0,1,.75,4H12.938L10.22,1.281A.75.75,0,1,1,11.281.22l4,4a.749.749,0,0,1,0,1.06l-4,4a.75.75,0,0,1-1.061,0Z" transform="translate(4.25 7.25)" fill="#141124"/>
                        </svg>
                    </h1>
                </a>
            </li>
        <% end_loop %>
    </ul>
        <% if $UpdatesList.MoreThanOnePage %>
            <% if $UpdatesList.NotFirstPage %>
                <a class="prev" href="$UpdatesList.PrevLink">Prev</a>
            <% end_if %>
            <% loop $UpdatesList.PaginationSummary %>
                <% if $CurrentBool %>
                    $PageNum
                <% else %>
                    <% if $Link %>
                        <a href="$Link">$PageNum</a>
                    <% else %>
                        ...
                    <% end_if %>
                <% end_if %>
            <% end_loop %>
            <% if $UpdatesList.NotLastPage %>
                <a class="next" href="$UpdatesList.NextLink">Next</a>
            <% end_if %>
        <% end_if %> --%>
</section>