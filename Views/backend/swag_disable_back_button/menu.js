// {block name="backend/index/view/menu" append}
Ext.define('Shopware.apps.SwagDisableBackButton.Menu', {
    override: 'Shopware.apps.Index.view.Menu',

    /**
     * @Override
     */
    afterRender: function () {
        var me = this,
            result = me.callParent(arguments);


        history.pushState(null, null, '');
        window.addEventListener('popstate', function(event) {
            history.pushState(null, null, '');
        });

        return result;
    }

});
// {/block}