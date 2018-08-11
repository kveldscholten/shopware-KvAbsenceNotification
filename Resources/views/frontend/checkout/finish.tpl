{extends file='parent:frontend/checkout/finish.tpl'}

{block name="frontend_index_content"}
    {if $absenceNotificationStatus}
        {block name='frontend_checkout_error_messages_kv_absence_notification_error'}
            {include file="frontend/_includes/messages.tpl" type="info" content={$absenceNotificationDesc}}
        {/block}
    {/if}

    {$smarty.block.parent}
{/block}
