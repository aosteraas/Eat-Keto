jQuery(document).ready(function(){
    // on recipe pages there are two .panel elements.
    // right hand panel is usually much shorter, this 
    // will bring them in to line.
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