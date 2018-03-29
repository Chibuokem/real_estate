(function ($, window, document, undefined) {

    var gridContainer = $('#grid-container-full-portfolio'),
        filtersContainer = $('#filters-container-full-portfolio');

    // init cubeportfolio
    gridContainer.cubeportfolio({
        animationType: 'flipOutDelay',
        gapHorizontal: 0,
        gapVertical: 0,
        gridAdjustment: 'responsive',
        caption: 'zoom',
        displayType: 'default',
        displayTypeSpeed: 100,
        // lightbox
        lightboxDelegate: '.cbp-lightbox',
        lightboxGallery: true,
        lightboxTitleSrc: 'data-title',
        lightboxShowCounter: true,
        // singlePage popup
        singlePageDelegate: '.cbp-singlePage',
        singlePageDeeplinking: true,
        singlePageStickyNavigation: true,
        singlePageShowCounter: true,
        singlePageCallback: function (url, element) {
            // to update singlePage content use the following method: this.updateSinglePage(yourContent)
        },
        // singlePageInline
        singlePageInlineDelegate: '.cbp-singlePageInline',
        singlePageInlinePosition: 'above',
        singlePageInlineShowCounter: true,
        singlePageInlineCallback: function(url, element) {
            // to update singlePageInline content use the following method: this.updateSinglePageInline(yourContent)
        }
    });
    // add listener for filters click
    filtersContainer.on('click', '.cbp-filter-item', function (e) {
        var me = $(this);

        // get cubeportfolio data and check if is still animating (reposition) the items.
        if ( !$.data(gridContainer[0], 'cubeportfolio').isAnimating ) {
            me.addClass('cbp-filter-item-active').siblings().removeClass('cbp-filter-item-active');
        }
        // filter the items
        gridContainer.cubeportfolio('filter', me.data('filter'), function () {});
    });
    // activate counter for filters
    gridContainer.cubeportfolio('showCounter', filtersContainer.find('.cbp-filter-item'));



})(jQuery, window, document);