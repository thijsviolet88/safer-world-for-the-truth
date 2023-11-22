<form class="pt-6" {$FormAttributes}>
    <% if $getFormError %>
        <p class="error">$getFormError</p>
    <% end_if %>
    <div class="space-y-6">
            <div class="space-y-4 lg:space-y-10">
                $Fields.dataFieldByName(FirstName)
                $Fields.dataFieldByName(Insert)
                $Fields.dataFieldByName(Lastname)
                $Fields.dataFieldByName(Email)
                <label for="Form_processJoinForm_Journalist" class="block text-lg lg:text-xl cursor-pointer lg:flex lg:gap-x-2">
                    <div>
                        $Fields.dataFieldByName(Journalist)
                    </div>
                    Do you work as a journalist?
                </label>
                <label for="Form_processJoinForm_Subscribe" class="block text-lg lg:text-xl cursor-pointer lg:flex lg:gap-x-2">
                    <div>
                        $Fields.dataFieldByName(Subscribe)
                    </div>
                    Please email me updates on the ‘a Safer World for the Truth’ initiative, including campaigns and ways to participate. You can unsubscribe at any time using the link in each email.
                </label>
            </div>
        <% loop $Actions %>
            {$Field}
        <% end_loop %>
    </div>
    <span class="text-sm text-grey">
        You will receive an automated email confirming that you signed the action. The information you provide will not be sold, rented or shared with third parties except as set out in our privacy policy
    </span>
</form>
