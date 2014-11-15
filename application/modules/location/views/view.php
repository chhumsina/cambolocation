					<?php
						foreach ($profiles->result_array() as $profile){
							echo "<a href='".BASE_URL.$profile['pro_name']."'><span class='badge'>".$profile['pro_name']."</span></a> ";
						}
						?>


