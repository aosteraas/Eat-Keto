jQuery(document).ready(function(){
    
    var leftPanel = $('#left-panel')
    var leftPanelHeight = leftPanel.height();

    var rightPanel = $('#right-panel');
    var rightPanelHeight = rightPanel.height();
    
    if(rightPanelHeight < leftPanelHeight) {
        rightPanel.height(leftPanelHeight);
    } else {
        leftPanel.height(rightPanelHeight);
    }
});