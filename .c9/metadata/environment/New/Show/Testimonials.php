{"filter":false,"title":"Testimonials.php","tooltip":"/New/Show/Testimonials.php","undoManager":{"mark":63,"position":63,"stack":[[{"start":{"row":173,"column":15},"end":{"row":174,"column":0},"action":"insert","lines":["",""],"id":481},{"start":{"row":174,"column":0},"end":{"row":174,"column":9},"action":"insert","lines":["\t\t\t\t    \t"]}],[{"start":{"row":174,"column":9},"end":{"row":181,"column":15},"action":"insert","lines":["<div>","\t\t\t\t    \t\t<?php while( $row2 = $testimonials->fetch()) : ?>","\t                            <div id=\"ex<?php echo $row2['testimonial_id'];?>\" class=\"modal\" style=\"background-color:#E5F5FA;\">","\t\t\t\t\t\t\t\t\t<p><?php echo $row2['testimonial']; ?></p>","\t\t\t\t\t\t\t\t\t<a href=\"#\" rel=\"modal:close\" class=\"image featured\" style=\"display: block; margin-left: auto; margin-right: auto; width: 50%;\"><img src=\"images/logo.png\" alt=\"\" /></a>","\t\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t<?php endwhile ?>\t","\t\t\t\t    \t</div>"],"id":482}],[{"start":{"row":176,"column":30},"end":{"row":176,"column":127},"action":"remove","lines":["div id=\"ex<?php echo $row2['testimonial_id'];?>\" class=\"modal\" style=\"background-color:#E5F5FA;\">"],"id":483}],[{"start":{"row":178,"column":9},"end":{"row":178,"column":177},"action":"remove","lines":["<a href=\"#\" rel=\"modal:close\" class=\"image featured\" style=\"display: block; margin-left: auto; margin-right: auto; width: 50%;\"><img src=\"images/logo.png\" alt=\"\" /></a>"],"id":484}],[{"start":{"row":176,"column":0},"end":{"row":176,"column":30},"action":"remove","lines":["\t                            <"],"id":485},{"start":{"row":175,"column":59},"end":{"row":176,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":177,"column":0},"end":{"row":177,"column":9},"action":"remove","lines":["\t\t\t\t\t\t\t\t\t"],"id":486},{"start":{"row":176,"column":51},"end":{"row":177,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":177,"column":0},"end":{"row":177,"column":14},"action":"remove","lines":["\t\t\t\t\t\t\t\t</div>"],"id":487},{"start":{"row":176,"column":51},"end":{"row":177,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":144,"column":185},"end":{"row":145,"column":0},"action":"insert","lines":["",""],"id":488},{"start":{"row":145,"column":0},"end":{"row":145,"column":44},"action":"insert","lines":["                                            "]}],[{"start":{"row":145,"column":44},"end":{"row":148,"column":14},"action":"insert","lines":["<div id=\"ex<?php echo $row2['testimonial_id'];?>\" class=\"modal\" style=\"background-color:#E5F5FA;\">","\t\t\t\t\t\t\t\t\t<p><?php echo $row2['testimonial']; ?></p>","\t\t\t\t\t\t\t\t\t<a href=\"#\" rel=\"modal:close\" class=\"image featured\" style=\"display: block; margin-left: auto; margin-right: auto; width: 50%;\"><img src=\"images/logo.png\" alt=\"\" /></a>","\t\t\t\t\t\t\t\t</div>"],"id":489}],[{"start":{"row":146,"column":9},"end":{"row":146,"column":10},"action":"insert","lines":["\t"],"id":490}],[{"start":{"row":146,"column":10},"end":{"row":146,"column":11},"action":"insert","lines":["\t"],"id":491}],[{"start":{"row":146,"column":11},"end":{"row":146,"column":12},"action":"insert","lines":["\t"],"id":492}],[{"start":{"row":147,"column":9},"end":{"row":147,"column":10},"action":"insert","lines":["\t"],"id":493}],[{"start":{"row":147,"column":10},"end":{"row":147,"column":11},"action":"insert","lines":["\t"],"id":494}],[{"start":{"row":147,"column":11},"end":{"row":147,"column":12},"action":"insert","lines":["\t"],"id":495}],[{"start":{"row":148,"column":8},"end":{"row":148,"column":9},"action":"insert","lines":["\t"],"id":496}],[{"start":{"row":148,"column":9},"end":{"row":148,"column":10},"action":"insert","lines":["\t"],"id":497}],[{"start":{"row":148,"column":10},"end":{"row":148,"column":11},"action":"insert","lines":["\t"],"id":498}],[{"start":{"row":145,"column":70},"end":{"row":145,"column":71},"action":"remove","lines":["2"],"id":499}],[{"start":{"row":145,"column":70},"end":{"row":145,"column":71},"action":"insert","lines":["1"],"id":500}],[{"start":{"row":146,"column":30},"end":{"row":146,"column":31},"action":"remove","lines":["2"],"id":501}],[{"start":{"row":146,"column":30},"end":{"row":146,"column":31},"action":"insert","lines":["1"],"id":502}],[{"start":{"row":178,"column":0},"end":{"row":182,"column":15},"action":"remove","lines":["\t\t\t\t    \t<div>","\t\t\t\t    \t\t<?php while( $row2 = $testimonials->fetch()) : ?>","\t\t\t\t\t\t\t\t\t<p><?php echo $row2['testimonial']; ?></p>","\t\t\t\t\t\t\t<?php endwhile ?>\t","\t\t\t\t    \t</div>"],"id":503}],[{"start":{"row":180,"column":10},"end":{"row":180,"column":59},"action":"remove","lines":["<?php while( $row2 = $testimonials->fetch()) : ?>"],"id":504},{"start":{"row":180,"column":10},"end":{"row":180,"column":40},"action":"insert","lines":["foreach($rows as $row) { ... }"]}],[{"start":{"row":180,"column":39},"end":{"row":180,"column":40},"action":"remove","lines":["}"],"id":505},{"start":{"row":180,"column":38},"end":{"row":180,"column":39},"action":"remove","lines":[" "]},{"start":{"row":180,"column":37},"end":{"row":180,"column":38},"action":"remove","lines":["."]},{"start":{"row":180,"column":36},"end":{"row":180,"column":37},"action":"remove","lines":["."]},{"start":{"row":180,"column":35},"end":{"row":180,"column":36},"action":"remove","lines":["."]},{"start":{"row":180,"column":34},"end":{"row":180,"column":35},"action":"remove","lines":[" "]}],[{"start":{"row":180,"column":22},"end":{"row":180,"column":23},"action":"remove","lines":["s"],"id":506}],[{"start":{"row":180,"column":22},"end":{"row":180,"column":23},"action":"insert","lines":["2"],"id":507}],[{"start":{"row":180,"column":31},"end":{"row":180,"column":32},"action":"insert","lines":["1"],"id":508}],[{"start":{"row":180,"column":10},"end":{"row":180,"column":11},"action":"insert","lines":["<"],"id":509},{"start":{"row":180,"column":11},"end":{"row":180,"column":12},"action":"insert","lines":["?"]}],[{"start":{"row":180,"column":12},"end":{"row":180,"column":13},"action":"insert","lines":["p"],"id":510},{"start":{"row":180,"column":13},"end":{"row":180,"column":14},"action":"insert","lines":["h"]},{"start":{"row":180,"column":14},"end":{"row":180,"column":15},"action":"insert","lines":["p"]}],[{"start":{"row":180,"column":15},"end":{"row":180,"column":16},"action":"insert","lines":[" "],"id":511}],[{"start":{"row":185,"column":0},"end":{"row":185,"column":22},"action":"remove","lines":["\t\t\t\t\t\t\t<?php endwhile "],"id":512},{"start":{"row":184,"column":14},"end":{"row":185,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":184,"column":14},"end":{"row":184,"column":15},"action":"insert","lines":[" "],"id":513}],[{"start":{"row":184,"column":15},"end":{"row":184,"column":16},"action":"insert","lines":["}"],"id":514}],[{"start":{"row":184,"column":15},"end":{"row":185,"column":0},"action":"insert","lines":["",""],"id":515},{"start":{"row":185,"column":0},"end":{"row":185,"column":8},"action":"insert","lines":["\t\t\t\t\t\t\t\t"]}],[{"start":{"row":180,"column":16},"end":{"row":181,"column":0},"action":"insert","lines":["",""],"id":516},{"start":{"row":181,"column":0},"end":{"row":181,"column":10},"action":"insert","lines":["\t\t\t\t    \t\t"]}],[{"start":{"row":181,"column":10},"end":{"row":181,"column":11},"action":"insert","lines":["\t"],"id":517}],[{"start":{"row":186,"column":7},"end":{"row":186,"column":8},"action":"remove","lines":["\t"],"id":518}],[{"start":{"row":181,"column":23},"end":{"row":181,"column":24},"action":"remove","lines":["2"],"id":519}],[{"start":{"row":181,"column":23},"end":{"row":181,"column":24},"action":"insert","lines":["1"],"id":520}],[{"start":{"row":181,"column":32},"end":{"row":181,"column":33},"action":"remove","lines":["1"],"id":521}],[{"start":{"row":181,"column":32},"end":{"row":181,"column":33},"action":"insert","lines":["2"],"id":522}],[{"start":{"row":186,"column":7},"end":{"row":186,"column":11},"action":"remove","lines":["}?>\t"],"id":523},{"start":{"row":186,"column":7},"end":{"row":186,"column":17},"action":"insert","lines":["<?php } ?>"]}],[{"start":{"row":181,"column":35},"end":{"row":181,"column":36},"action":"remove","lines":["{"],"id":524}],[{"start":{"row":181,"column":35},"end":{"row":181,"column":39},"action":"insert","lines":["{ ?>"],"id":525}],[{"start":{"row":181,"column":0},"end":{"row":181,"column":11},"action":"remove","lines":["\t\t\t\t    \t\t\t"],"id":526},{"start":{"row":180,"column":16},"end":{"row":181,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":180,"column":37},"end":{"row":180,"column":38},"action":"remove","lines":["2"],"id":527}],[{"start":{"row":180,"column":37},"end":{"row":180,"column":38},"action":"insert","lines":["1"],"id":528}],[{"start":{"row":180,"column":28},"end":{"row":180,"column":29},"action":"remove","lines":["1"],"id":529}],[{"start":{"row":180,"column":28},"end":{"row":180,"column":29},"action":"insert","lines":["2"],"id":530}],[{"start":{"row":180,"column":37},"end":{"row":180,"column":38},"action":"remove","lines":["1"],"id":531}],[{"start":{"row":180,"column":37},"end":{"row":180,"column":38},"action":"insert","lines":["2"],"id":532}],[{"start":{"row":180,"column":28},"end":{"row":180,"column":29},"action":"remove","lines":["2"],"id":533}],[{"start":{"row":180,"column":28},"end":{"row":180,"column":29},"action":"insert","lines":["1"],"id":534}],[{"start":{"row":180,"column":24},"end":{"row":180,"column":29},"action":"remove","lines":["$row1"],"id":535},{"start":{"row":180,"column":24},"end":{"row":180,"column":37},"action":"insert","lines":["$testimonials"]}],[{"start":{"row":180,"column":25},"end":{"row":180,"column":37},"action":"remove","lines":["testimonials"],"id":536},{"start":{"row":180,"column":25},"end":{"row":180,"column":26},"action":"insert","lines":["r"]},{"start":{"row":180,"column":26},"end":{"row":180,"column":27},"action":"insert","lines":["o"]},{"start":{"row":180,"column":27},"end":{"row":180,"column":28},"action":"insert","lines":["w"]},{"start":{"row":180,"column":28},"end":{"row":180,"column":29},"action":"insert","lines":["1"]}],[{"start":{"row":180,"column":37},"end":{"row":180,"column":38},"action":"remove","lines":["2"],"id":537}],[{"start":{"row":180,"column":37},"end":{"row":180,"column":38},"action":"insert","lines":["s"],"id":538}],[{"start":{"row":181,"column":55},"end":{"row":181,"column":56},"action":"remove","lines":["2"],"id":539}],[{"start":{"row":181,"column":55},"end":{"row":181,"column":56},"action":"insert","lines":["s"],"id":540}],[{"start":{"row":182,"column":27},"end":{"row":182,"column":28},"action":"remove","lines":["2"],"id":541}],[{"start":{"row":182,"column":27},"end":{"row":182,"column":28},"action":"insert","lines":["s"],"id":542}],[{"start":{"row":147,"column":150},"end":{"row":147,"column":151},"action":"insert","lines":["."],"id":543},{"start":{"row":147,"column":151},"end":{"row":147,"column":152},"action":"insert","lines":["."]},{"start":{"row":147,"column":152},"end":{"row":147,"column":153},"action":"insert","lines":["/"]},{"start":{"row":147,"column":153},"end":{"row":147,"column":154},"action":"insert","lines":["."]},{"start":{"row":147,"column":154},"end":{"row":147,"column":155},"action":"insert","lines":["."]},{"start":{"row":147,"column":155},"end":{"row":147,"column":156},"action":"insert","lines":["/"]}],[{"start":{"row":183,"column":147},"end":{"row":183,"column":153},"action":"insert","lines":["../../"],"id":544}]]},"ace":{"folds":[],"scrolltop":2724,"scrollleft":0,"selection":{"start":{"row":200,"column":23},"end":{"row":200,"column":23},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":169,"state":"start","mode":"ace/mode/php"}},"timestamp":1564347180948,"hash":"a1fcfacdfde927c7363da03be6d3e40ffc77a624"}