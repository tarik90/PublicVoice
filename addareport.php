<?php
  include("include/layouts/top_addareport.php");
?>
    <h4>Any Problem/Suggestion? Write us.</h4>
    <hr>
            
    <input id="reportBox" type="text" name="report" placeholder=" Write any issue you are having or any suggestion for us" required>
    <br>
    <br>
    <?php
        include("include/layouts/middle_addareport.php");
    ?>
    <input id="reportEmailBox" type="email" name="email" placeholder=" Enter your email. REQUIRED" required>
    <select id="selectBox" name="problemIn" required>
        <option value="" >PROBLEM IN ...</option>
        <option value="education">EDUCATION</option>
        <option value="environmentNature">ENVIRONMENT & NATURE</option>
        <option value="food">FOOD</option>
        <option value="fashion">FASHION</option>
        <option value="healthBeauty">HEALTH & BEAUTY</option>
        <option value="musicEntertainment">MUSIC & ENTERTAINEMENT</option>
        <option value="politics">POLITICS</option>
        <option value="personal">PERSONAL</option>
        <option value="religion">RELIGION</option>
        <option value="sports">SPORTS</option>
        <option value="techEngineering">TECH & ENGINEERING</option>
        <option value="warterrorism">WAR & TERRORISM</option>
        <option value="world">WORLD</option>
        <option value="wtfs">WTF'S</option>
        <option value="functionality">SITE FUNCTIONALITY</option>
        <option value="layout">SITE LAYOUT</option>
        <option value="other">OTHER</option>
    </select>
    <br>
    <h3><input id="submitButton"type="submit" name="submit" value="submit"></h3>
<?php
  include("include/layouts/bottom_addareport.php");
?>         