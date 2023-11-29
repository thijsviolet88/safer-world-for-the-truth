$ElementalArea
<section class="bg-purple">
    <header class="container space-y-6 text-center text-white py-10">
        <% if $Header %>
            <h4 class="italic text-3xl">{$Header}</h4>
        <% end_if  %>
        <% if $Title %>
            <h1 class="leading-relaxed">
                {$Title}
                <time class="block italic font-light" datetime="{$Date}">{$Date.Format('MMMM dd, yyyy')}</time>
            </h1>
        <% end_if  %>
        <% if $Intro %>
            <h5 class="leading-relaxed text-3xl px-56">
                {$Intro}
            </h5>
        <% end_if  %>
    </header>
</section>
<section class="container bg-white-dark p-20 -translate-y-6">
    <div class="prose-p:leading-relaxed prose-p:text-base prose-a:purple-header">
        $Content
    </div>
</section>