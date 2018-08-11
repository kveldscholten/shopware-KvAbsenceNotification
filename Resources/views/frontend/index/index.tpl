{extends file='parent:frontend/index/index.tpl'}

{block name='frontend_index_content_main'}
    {if $absenceNotificationStatus}
        {block name="frontend_absence_notification"}
            <div class="kv-absence-notification">
                {$absenceNotificationDesc}
            </div>
        {/block}
    {/if}

    {$smarty.block.parent}
{/block}
