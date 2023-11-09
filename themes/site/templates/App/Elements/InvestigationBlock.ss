<section class="space-y-20 px-6 lg:px-0">
    <% if $ShowTitle %>
        <header class="text-center">
            <h2>{$Title}</h2>
        </header>
    <% end_if %>
    <div class="flex flex-col gap-y-6">
        <investigation-list :investigations="{$InvestigationList}"></investigation-list>
    </div>
</section>