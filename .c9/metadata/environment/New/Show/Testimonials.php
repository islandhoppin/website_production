{"filter":false,"title":"Testimonials.php","tooltip":"/New/Show/Testimonials.php","undoManager":{"mark":41,"position":41,"stack":[[{"start":{"row":173,"column":15},"end":{"row":174,"column":0},"action":"insert","lines":["",""],"id":481},{"start":{"row":174,"column":0},"end":{"row":174,"column":9},"action":"insert","lines":["\t\t\t\t    \t"]}],[{"start":{"row":174,"column":9},"end":{"row":181,"column":15},"action":"insert","lines":["<div>","\t\t\t\t    \t\t<?php while( $row2 = $testimonials->fetch()) : ?>","\t                            <div id=\"ex<?php echo $row2['testimonial_id'];?>\" class=\"modal\" style=\"background-color:#E5F5FA;\">","\t\t\t\t\t\t\t\t\t<p><?php echo $row2['testimonial']; ?></p>","\t\t\t\t\t\t\t\t\t<a href=\"#\" rel=\"modal:close\" class=\"image featured\" style=\"display: block; margin-left: auto; margin-right: auto; width: 50%;\"><img src=\"images/logo.png\" alt=\"\" /></a>","\t\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t<?php endwhile ?>\t","\t\t\t\t    \t</div>"],"id":482}],[{"start":{"row":176,"column":30},"end":{"row":176,"column":127},"action":"remove","lines":["div id=\"ex<?php echo $row2['testimonial_id'];?>\" class=\"modal\" style=\"background-color:#E5F5FA;\">"],"id":483}],[{"start":{"row":178,"column":9},"end":{"row":178,"column":177},"action":"remove","lines":["<a href=\"#\" rel=\"modal:close\" class=\"image featured\" style=\"display: block; margin-left: auto; margin-right: auto; width: 50%;\"><img src=\"images/logo.png\" alt=\"\" /></a>"],"id":484}],[{"start":{"row":176,"column":0},"end":{"row":176,"column":30},"action":"remove","lines":["\t                            <"],"id":485},{"start":{"row":175,"column":59},"end":{"row":176,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":177,"column":0},"end":{"row":177,"column":9},"action":"remove","lines":["\t\t\t\t\t\t\t\t\t"],"id":486},{"start":{"row":176,"column":51},"end":{"row":177,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":177,"column":0},"end":{"row":177,"column":14},"action":"remove","lines":["\t\t\t\t\t\t\t\t</div>"],"id":487},{"start":{"row":176,"column":51},"end":{"row":177,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":144,"column":185},"end":{"row":145,"column":0},"action":"insert","lines":["",""],"id":488},{"start":{"row":145,"column":0},"end":{"row":145,"column":44},"action":"insert","lines":["                                            "]}],[{"start":{"row":145,"column":44},"end":{"row":148,"column":14},"action":"insert","lines":["<div id=\"ex<?php echo $row2['testimonial_id'];?>\" class=\"modal\" style=\"background-color:#E5F5FA;\">","\t\t\t\t\t\t\t\t\t<p><?php echo $row2['testimonial']; ?></p>","\t\t\t\t\t\t\t\t\t<a href=\"#\" rel=\"modal:close\" class=\"image featured\" style=\"display: block; margin-left: auto; margin-right: auto; width: 50%;\"><img src=\"images/logo.png\" alt=\"\" /></a>","\t\t\t\t\t\t\t\t</div>"],"id":489}],[{"start":{"row":146,"column":9},"end":{"row":146,"column":10},"action":"insert","lines":["\t"],"id":490}],[{"start":{"row":146,"column":10},"end":{"row":146,"column":11},"action":"insert","lines":["\t"],"id":491}],[{"start":{"row":146,"column":11},"end":{"row":146,"column":12},"action":"insert","lines":["\t"],"id":492}],[{"start":{"row":147,"column":9},"end":{"row":147,"column":10},"action":"insert","lines":["\t"],"id":493}],[{"start":{"row":147,"column":10},"end":{"row":147,"column":11},"action":"insert","lines":["\t"],"id":494}],[{"start":{"row":147,"column":11},"end":{"row":147,"column":12},"action":"insert","lines":["\t"],"id":495}],[{"start":{"row":148,"column":8},"end":{"row":148,"column":9},"action":"insert","lines":["\t"],"id":496}],[{"start":{"row":148,"column":9},"end":{"row":148,"column":10},"action":"insert","lines":["\t"],"id":497}],[{"start":{"row":148,"column":10},"end":{"row":148,"column":11},"action":"insert","lines":["\t"],"id":498}],[{"start":{"row":145,"column":70},"end":{"row":145,"column":71},"action":"remove","lines":["2"],"id":499}],[{"start":{"row":145,"column":70},"end":{"row":145,"column":71},"action":"insert","lines":["1"],"id":500}],[{"start":{"row":146,"column":30},"end":{"row":146,"column":31},"action":"remove","lines":["2"],"id":501}],[{"start":{"row":146,"column":30},"end":{"row":146,"column":31},"action":"insert","lines":["1"],"id":502}],[{"start":{"row":178,"column":0},"end":{"row":182,"column":15},"action":"remove","lines":["\t\t\t\t    \t<div>","\t\t\t\t    \t\t<?php while( $row2 = $testimonials->fetch()) : ?>","\t\t\t\t\t\t\t\t\t<p><?php echo $row2['testimonial']; ?></p>","\t\t\t\t\t\t\t<?php endwhile ?>\t","\t\t\t\t    \t</div>"],"id":503}],[{"start":{"row":180,"column":10},"end":{"row":180,"column":59},"action":"remove","lines":["<?php while( $row2 = $testimonials->fetch()) : ?>"],"id":504},{"start":{"row":180,"column":10},"end":{"row":180,"column":40},"action":"insert","lines":["foreach($rows as $row) { ... }"]}],[{"start":{"row":180,"column":39},"end":{"row":180,"column":40},"action":"remove","lines":["}"],"id":505},{"start":{"row":180,"column":38},"end":{"row":180,"column":39},"action":"remove","lines":[" "]},{"start":{"row":180,"column":37},"end":{"row":180,"column":38},"action":"remove","lines":["."]},{"start":{"row":180,"column":36},"end":{"row":180,"column":37},"action":"remove","lines":["."]},{"start":{"row":180,"column":35},"end":{"row":180,"column":36},"action":"remove","lines":["."]},{"start":{"row":180,"column":34},"end":{"row":180,"column":35},"action":"remove","lines":[" "]}],[{"start":{"row":180,"column":22},"end":{"row":180,"column":23},"action":"remove","lines":["s"],"id":506}],[{"start":{"row":180,"column":22},"end":{"row":180,"column":23},"action":"insert","lines":["2"],"id":507}],[{"start":{"row":180,"column":31},"end":{"row":180,"column":32},"action":"insert","lines":["1"],"id":508}],[{"start":{"row":180,"column":10},"end":{"row":180,"column":11},"action":"insert","lines":["<"],"id":509},{"start":{"row":180,"column":11},"end":{"row":180,"column":12},"action":"insert","lines":["?"]}],[{"start":{"row":180,"column":12},"end":{"row":180,"column":13},"action":"insert","lines":["p"],"id":510},{"start":{"row":180,"column":13},"end":{"row":180,"column":14},"action":"insert","lines":["h"]},{"start":{"row":180,"column":14},"end":{"row":180,"column":15},"action":"insert","lines":["p"]}],[{"start":{"row":180,"column":15},"end":{"row":180,"column":16},"action":"insert","lines":[" "],"id":511}],[{"start":{"row":185,"column":0},"end":{"row":185,"column":22},"action":"remove","lines":["\t\t\t\t\t\t\t<?php endwhile "],"id":512},{"start":{"row":184,"column":14},"end":{"row":185,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":184,"column":14},"end":{"row":184,"column":15},"action":"insert","lines":[" "],"id":513}],[{"start":{"row":184,"column":15},"end":{"row":184,"column":16},"action":"insert","lines":["}"],"id":514}],[{"start":{"row":184,"column":15},"end":{"row":185,"column":0},"action":"insert","lines":["",""],"id":515},{"start":{"row":185,"column":0},"end":{"row":185,"column":8},"action":"insert","lines":["\t\t\t\t\t\t\t\t"]}],[{"start":{"row":180,"column":16},"end":{"row":181,"column":0},"action":"insert","lines":["",""],"id":516},{"start":{"row":181,"column":0},"end":{"row":181,"column":10},"action":"insert","lines":["\t\t\t\t    \t\t"]}],[{"start":{"row":181,"column":10},"end":{"row":181,"column":11},"action":"insert","lines":["\t"],"id":517}],[{"start":{"row":186,"column":7},"end":{"row":186,"column":8},"action":"remove","lines":["\t"],"id":518}],[{"start":{"row":181,"column":23},"end":{"row":181,"column":24},"action":"remove","lines":["2"],"id":519}],[{"start":{"row":181,"column":23},"end":{"row":181,"column":24},"action":"insert","lines":["1"],"id":520}],[{"start":{"row":181,"column":32},"end":{"row":181,"column":33},"action":"remove","lines":["1"],"id":521}],[{"start":{"row":181,"column":32},"end":{"row":181,"column":33},"action":"insert","lines":["2"],"id":522}]]},"ace":{"folds":[],"scrolltop":2707.5,"scrollleft":24,"selection":{"start":{"row":192,"column":21},"end":{"row":192,"column":21},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":168,"state":"start","mode":"ace/mode/php"}},"timestamp":1564346706425,"hash":"ddd48f2282e29d620c42a86fd4f6af8c3e18a075"}