{extends file='parent:frontend/plugins/index/delivery_informations.tpl'}

{* Delivery informations *}
{block name='frontend_widgets_delivery_infos'}
    {if $absenceNotificationStatus}
        {block name='frontend_widgets_kv_absence_notification_delivery_infos'}
            <div class="product--delivery">
                <p class="delivery--information">
                    <span class="delivery--text delivery-kv-absence-notification--status-shipping">
                        <i class="delivery--status-icon delivery-kv-absence-notification--status-shipping"></i>
                        {s name="DetailDataInfoKvAbsenceNotificationShipping"}Artikel ab {$absenceNotificationShipping|date:'date_long'} lieferbar.{/s}
                    </span>
                </p>
            </div>
        {/block}
    {else}
        {$smarty.block.parent}
    {/if}
{/block}
