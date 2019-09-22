<?php

//Footer Framework
function BottomFramework(){
    $BottomofPage = <<<"BOTTOM"
    
    <footer>
        <!--Footer-->
        <nav class="footer-bar">
            <!--Footer Navigation Bar-->
            <table id="header-table">
                <tr>
                    <td>
                        <ul>
                            <li><a href="about.php">about us</a></li>
                            <li><a href="contact.php">contact us</a></li>
                            <li><a href="product.php">Product</a></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="middle">
                        </ul>
                    </td>
                    <td>
                        <ul class="right">
                        </ul>
                    </td>
                </tr>
            </table>
        </nav>
        <!--End of Footer Navigation Bar-->
        </footer>
BOTTOM;
        echo $BottomofPage;

}

?>