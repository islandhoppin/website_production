{"filter":false,"title":"Testimonials.php","tooltip":"/New/Show/Testimonials.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":176,"column":30},"end":{"row":176,"column":127},"action":"remove","lines":["div id=\"ex<?php echo $row2['testimonial_id'];?>\" class=\"modal\" style=\"background-color:#E5F5FA;\">"],"id":483}],[{"start":{"row":178,"column":9},"end":{"row":178,"column":177},"action":"remove","lines":["<a href=\"#\" rel=\"modal:close\" class=\"image featured\" style=\"display: block; margin-left: auto; margin-right: auto; width: 50%;\"><img src=\"images/logo.png\" alt=\"\" /></a>"],"id":484}],[{"start":{"row":176,"column":0},"end":{"row":176,"column":30},"action":"remove","lines":["\t                            <"],"id":485},{"start":{"row":175,"column":59},"end":{"row":176,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":177,"column":0},"end":{"row":177,"column":9},"action":"remove","lines":["\t\t\t\t\t\t\t\t\t"],"id":486},{"start":{"row":176,"column":51},"end":{"row":177,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":177,"column":0},"end":{"row":177,"column":14},"action":"remove","lines":["\t\t\t\t\t\t\t\t</div>"],"id":487},{"start":{"row":176,"column":51},"end":{"row":177,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":144,"column":185},"end":{"row":145,"column":0},"action":"insert","lines":["",""],"id":488},{"start":{"row":145,"column":0},"end":{"row":145,"column":44},"action":"insert","lines":["                                            "]}],[{"start":{"row":145,"column":44},"end":{"row":148,"column":14},"action":"insert","lines":["<div id=\"ex<?php echo $row2['testimonial_id'];?>\" class=\"modal\" style=\"background-color:#E5F5FA;\">","\t\t\t\t\t\t\t\t\t<p><?php echo $row2['testimonial']; ?></p>","\t\t\t\t\t\t\t\t\t<a href=\"#\" rel=\"modal:close\" class=\"image featured\" style=\"display: block; margin-left: auto; margin-right: auto; width: 50%;\"><img src=\"images/logo.png\" alt=\"\" /></a>","\t\t\t\t\t\t\t\t</div>"],"id":489}],[{"start":{"row":146,"column":9},"end":{"row":146,"column":10},"action":"insert","lines":["\t"],"id":490}],[{"start":{"row":146,"column":10},"end":{"row":146,"column":11},"action":"insert","lines":["\t"],"id":491}],[{"start":{"row":146,"column":11},"end":{"row":146,"column":12},"action":"insert","lines":["\t"],"id":492}],[{"start":{"row":147,"column":9},"end":{"row":147,"column":10},"action":"insert","lines":["\t"],"id":493}],[{"start":{"row":147,"column":10},"end":{"row":147,"column":11},"action":"insert","lines":["\t"],"id":494}],[{"start":{"row":147,"column":11},"end":{"row":147,"column":12},"action":"insert","lines":["\t"],"id":495}],[{"start":{"row":148,"column":8},"end":{"row":148,"column":9},"action":"insert","lines":["\t"],"id":496}],[{"start":{"row":148,"column":9},"end":{"row":148,"column":10},"action":"insert","lines":["\t"],"id":497}],[{"start":{"row":148,"column":10},"end":{"row":148,"column":11},"action":"insert","lines":["\t"],"id":498}],[{"start":{"row":145,"column":70},"end":{"row":145,"column":71},"action":"remove","lines":["2"],"id":499}],[{"start":{"row":145,"column":70},"end":{"row":145,"column":71},"action":"insert","lines":["1"],"id":500}],[{"start":{"row":146,"column":30},"end":{"row":146,"column":31},"action":"remove","lines":["2"],"id":501}],[{"start":{"row":146,"column":30},"end":{"row":146,"column":31},"action":"insert","lines":["1"],"id":502}],[{"start":{"row":178,"column":0},"end":{"row":182,"column":15},"action":"remove","lines":["\t\t\t\t    \t<div>","\t\t\t\t    \t\t<?php while( $row2 = $testimonials->fetch()) : ?>","\t\t\t\t\t\t\t\t\t<p><?php echo $row2['testimonial']; ?></p>","\t\t\t\t\t\t\t<?php endwhile ?>\t","\t\t\t\t    \t</div>"],"id":503}],[{"start":{"row":180,"column":10},"end":{"row":180,"column":59},"action":"remove","lines":["<?php while( $row2 = $testimonials->fetch()) : ?>"],"id":504},{"start":{"row":180,"column":10},"end":{"row":180,"column":40},"action":"insert","lines":["foreach($rows as $row) { ... }"]}],[{"start":{"row":180,"column":39},"end":{"row":180,"column":40},"action":"remove","lines":["}"],"id":505},{"start":{"row":180,"column":38},"end":{"row":180,"column":39},"action":"remove","lines":[" "]},{"start":{"row":180,"column":37},"end":{"row":180,"column":38},"action":"remove","lines":["."]},{"start":{"row":180,"column":36},"end":{"row":180,"column":37},"action":"remove","lines":["."]},{"start":{"row":180,"column":35},"end":{"row":180,"column":36},"action":"remove","lines":["."]},{"start":{"row":180,"column":34},"end":{"row":180,"column":35},"action":"remove","lines":[" "]}],[{"start":{"row":180,"column":22},"end":{"row":180,"column":23},"action":"remove","lines":["s"],"id":506}],[{"start":{"row":180,"column":22},"end":{"row":180,"column":23},"action":"insert","lines":["2"],"id":507}],[{"start":{"row":180,"column":31},"end":{"row":180,"column":32},"action":"insert","lines":["1"],"id":508}],[{"start":{"row":180,"column":10},"end":{"row":180,"column":11},"action":"insert","lines":["<"],"id":509},{"start":{"row":180,"column":11},"end":{"row":180,"column":12},"action":"insert","lines":["?"]}],[{"start":{"row":180,"column":12},"end":{"row":180,"column":13},"action":"insert","lines":["p"],"id":510},{"start":{"row":180,"column":13},"end":{"row":180,"column":14},"action":"insert","lines":["h"]},{"start":{"row":180,"column":14},"end":{"row":180,"column":15},"action":"insert","lines":["p"]}],[{"start":{"row":180,"column":15},"end":{"row":180,"column":16},"action":"insert","lines":[" "],"id":511}],[{"start":{"row":185,"column":0},"end":{"row":185,"column":22},"action":"remove","lines":["\t\t\t\t\t\t\t<?php endwhile "],"id":512},{"start":{"row":184,"column":14},"end":{"row":185,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":184,"column":14},"end":{"row":184,"column":15},"action":"insert","lines":[" "],"id":513}],[{"start":{"row":184,"column":15},"end":{"row":184,"column":16},"action":"insert","lines":["}"],"id":514}],[{"start":{"row":184,"column":15},"end":{"row":185,"column":0},"action":"insert","lines":["",""],"id":515},{"start":{"row":185,"column":0},"end":{"row":185,"column":8},"action":"insert","lines":["\t\t\t\t\t\t\t\t"]}],[{"start":{"row":180,"column":16},"end":{"row":181,"column":0},"action":"insert","lines":["",""],"id":516},{"start":{"row":181,"column":0},"end":{"row":181,"column":10},"action":"insert","lines":["\t\t\t\t    \t\t"]}],[{"start":{"row":181,"column":10},"end":{"row":181,"column":11},"action":"insert","lines":["\t"],"id":517}],[{"start":{"row":186,"column":7},"end":{"row":186,"column":8},"action":"remove","lines":["\t"],"id":518}],[{"start":{"row":181,"column":23},"end":{"row":181,"column":24},"action":"remove","lines":["2"],"id":519}],[{"start":{"row":181,"column":23},"end":{"row":181,"column":24},"action":"insert","lines":["1"],"id":520}],[{"start":{"row":181,"column":32},"end":{"row":181,"column":33},"action":"remove","lines":["1"],"id":521}],[{"start":{"row":181,"column":32},"end":{"row":181,"column":33},"action":"insert","lines":["2"],"id":522}],[{"start":{"row":186,"column":7},"end":{"row":186,"column":11},"action":"remove","lines":["}?>\t"],"id":523},{"start":{"row":186,"column":7},"end":{"row":186,"column":17},"action":"insert","lines":["<?php } ?>"]}],[{"start":{"row":181,"column":35},"end":{"row":181,"column":36},"action":"remove","lines":["{"],"id":524}],[{"start":{"row":181,"column":35},"end":{"row":181,"column":39},"action":"insert","lines":["{ ?>"],"id":525}],[{"start":{"row":181,"column":0},"end":{"row":181,"column":11},"action":"remove","lines":["\t\t\t\t    \t\t\t"],"id":526},{"start":{"row":180,"column":16},"end":{"row":181,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":180,"column":37},"end":{"row":180,"column":38},"action":"remove","lines":["2"],"id":527}],[{"start":{"row":180,"column":37},"end":{"row":180,"column":38},"action":"insert","lines":["1"],"id":528}],[{"start":{"row":180,"column":28},"end":{"row":180,"column":29},"action":"remove","lines":["1"],"id":529}],[{"start":{"row":180,"column":28},"end":{"row":180,"column":29},"action":"insert","lines":["2"],"id":530}],[{"start":{"row":180,"column":37},"end":{"row":180,"column":38},"action":"remove","lines":["1"],"id":531}],[{"start":{"row":180,"column":37},"end":{"row":180,"column":38},"action":"insert","lines":["2"],"id":532}],[{"start":{"row":180,"column":28},"end":{"row":180,"column":29},"action":"remove","lines":["2"],"id":533}],[{"start":{"row":180,"column":28},"end":{"row":180,"column":29},"action":"insert","lines":["1"],"id":534}],[{"start":{"row":180,"column":24},"end":{"row":180,"column":29},"action":"remove","lines":["$row1"],"id":535},{"start":{"row":180,"column":24},"end":{"row":180,"column":37},"action":"insert","lines":["$testimonials"]}],[{"start":{"row":180,"column":25},"end":{"row":180,"column":37},"action":"remove","lines":["testimonials"],"id":536},{"start":{"row":180,"column":25},"end":{"row":180,"column":26},"action":"insert","lines":["r"]},{"start":{"row":180,"column":26},"end":{"row":180,"column":27},"action":"insert","lines":["o"]},{"start":{"row":180,"column":27},"end":{"row":180,"column":28},"action":"insert","lines":["w"]},{"start":{"row":180,"column":28},"end":{"row":180,"column":29},"action":"insert","lines":["1"]}],[{"start":{"row":180,"column":37},"end":{"row":180,"column":38},"action":"remove","lines":["2"],"id":537}],[{"start":{"row":180,"column":37},"end":{"row":180,"column":38},"action":"insert","lines":["s"],"id":538}],[{"start":{"row":181,"column":55},"end":{"row":181,"column":56},"action":"remove","lines":["2"],"id":539}],[{"start":{"row":181,"column":55},"end":{"row":181,"column":56},"action":"insert","lines":["s"],"id":540}],[{"start":{"row":182,"column":27},"end":{"row":182,"column":28},"action":"remove","lines":["2"],"id":541}],[{"start":{"row":182,"column":27},"end":{"row":182,"column":28},"action":"insert","lines":["s"],"id":542}],[{"start":{"row":147,"column":150},"end":{"row":147,"column":151},"action":"insert","lines":["."],"id":543},{"start":{"row":147,"column":151},"end":{"row":147,"column":152},"action":"insert","lines":["."]},{"start":{"row":147,"column":152},"end":{"row":147,"column":153},"action":"insert","lines":["/"]},{"start":{"row":147,"column":153},"end":{"row":147,"column":154},"action":"insert","lines":["."]},{"start":{"row":147,"column":154},"end":{"row":147,"column":155},"action":"insert","lines":["."]},{"start":{"row":147,"column":155},"end":{"row":147,"column":156},"action":"insert","lines":["/"]}],[{"start":{"row":183,"column":147},"end":{"row":183,"column":153},"action":"insert","lines":["../../"],"id":544}],[{"start":{"row":178,"column":0},"end":{"row":186,"column":15},"action":"remove","lines":["","\t\t\t\t    \t<div>","\t\t\t\t    \t\t<?php foreach($row1 as $rows) { ?>","\t                            <div id=\"ex<?php echo $rows['testimonial_id'];?>\" class=\"modal\" style=\"background-color:#E5F5FA;\">","\t\t\t\t\t\t\t\t\t<p><?php echo $rows['testimonial']; ?></p>","\t\t\t\t\t\t\t\t\t<a href=\"#\" rel=\"modal:close\" class=\"image featured\" style=\"display: block; margin-left: auto; margin-right: auto; width: 50%;\"><img src=\"../../images/logo.png\" alt=\"\" /></a>","\t\t\t\t\t\t\t\t</div> ","\t\t\t\t\t\t\t<?php } ?>","\t\t\t\t    \t</div>"],"id":546},{"start":{"row":177,"column":15},"end":{"row":178,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":129,"column":108},"end":{"row":130,"column":0},"action":"insert","lines":["",""],"id":547},{"start":{"row":130,"column":0},"end":{"row":130,"column":44},"action":"insert","lines":["                                            "]}],[{"start":{"row":130,"column":44},"end":{"row":130,"column":108},"action":"insert","lines":["<th border=1 style='border: 1px solid #000000;'>Testimonial</th>"],"id":548}],[{"start":{"row":130,"column":92},"end":{"row":130,"column":103},"action":"remove","lines":["Testimonial"],"id":549},{"start":{"row":130,"column":92},"end":{"row":130,"column":93},"action":"insert","lines":["C"]},{"start":{"row":130,"column":93},"end":{"row":130,"column":94},"action":"insert","lines":["r"]},{"start":{"row":130,"column":94},"end":{"row":130,"column":95},"action":"insert","lines":["e"]},{"start":{"row":130,"column":95},"end":{"row":130,"column":96},"action":"insert","lines":["w"]}],[{"start":{"row":149,"column":17},"end":{"row":150,"column":0},"action":"insert","lines":["",""],"id":550},{"start":{"row":150,"column":0},"end":{"row":150,"column":11},"action":"insert","lines":["\t\t\t\t\t\t\t\t\t\t\t"]}],[{"start":{"row":150,"column":11},"end":{"row":150,"column":95},"action":"insert","lines":["td border=1 style='border: 1px solid #000000;'><?php echo $row1['tripdate']; ?></td>"],"id":551}],[{"start":{"row":150,"column":76},"end":{"row":150,"column":84},"action":"remove","lines":["tripdate"],"id":552},{"start":{"row":150,"column":76},"end":{"row":150,"column":77},"action":"insert","lines":["c"]},{"start":{"row":150,"column":77},"end":{"row":150,"column":78},"action":"insert","lines":["r"]},{"start":{"row":150,"column":78},"end":{"row":150,"column":79},"action":"insert","lines":["e"]},{"start":{"row":150,"column":79},"end":{"row":150,"column":80},"action":"insert","lines":["w"]}],[{"start":{"row":13,"column":92},"end":{"row":13,"column":93},"action":"insert","lines":["c"],"id":553},{"start":{"row":13,"column":93},"end":{"row":13,"column":94},"action":"insert","lines":["r"]},{"start":{"row":13,"column":94},"end":{"row":13,"column":95},"action":"insert","lines":["e"]},{"start":{"row":13,"column":95},"end":{"row":13,"column":96},"action":"insert","lines":["w"]},{"start":{"row":13,"column":96},"end":{"row":13,"column":97},"action":"insert","lines":[","]}],[{"start":{"row":13,"column":97},"end":{"row":13,"column":98},"action":"insert","lines":[" "],"id":554}],[{"start":{"row":160,"column":136},"end":{"row":161,"column":0},"action":"insert","lines":["",""],"id":555},{"start":{"row":161,"column":0},"end":{"row":161,"column":52},"action":"insert","lines":["                                                    "]}],[{"start":{"row":161,"column":52},"end":{"row":161,"column":136},"action":"insert","lines":["<input type=\"hidden\" name=\"Testimonial\" value=\"<?php echo $row1['testimonial']; ?>\">"],"id":556}],[{"start":{"row":161,"column":79},"end":{"row":161,"column":90},"action":"remove","lines":["Testimonial"],"id":557},{"start":{"row":161,"column":79},"end":{"row":161,"column":80},"action":"insert","lines":["C"]},{"start":{"row":161,"column":80},"end":{"row":161,"column":81},"action":"insert","lines":["r"]},{"start":{"row":161,"column":81},"end":{"row":161,"column":82},"action":"insert","lines":["e"]},{"start":{"row":161,"column":82},"end":{"row":161,"column":83},"action":"insert","lines":["w"]}],[{"start":{"row":161,"column":110},"end":{"row":161,"column":121},"action":"remove","lines":["testimonial"],"id":558},{"start":{"row":161,"column":110},"end":{"row":161,"column":111},"action":"insert","lines":["c"]},{"start":{"row":161,"column":111},"end":{"row":161,"column":112},"action":"insert","lines":["r"]},{"start":{"row":161,"column":112},"end":{"row":161,"column":113},"action":"insert","lines":["e"]},{"start":{"row":161,"column":113},"end":{"row":161,"column":114},"action":"insert","lines":["w"]}],[{"start":{"row":78,"column":87},"end":{"row":79,"column":0},"action":"insert","lines":["",""],"id":559},{"start":{"row":79,"column":0},"end":{"row":79,"column":10},"action":"insert","lines":["\t\t\t\t\t\t\t\t\t\t"]}],[{"start":{"row":79,"column":10},"end":{"row":80,"column":110},"action":"insert","lines":["header style=\"margin-top:25px;\"><h3>Headline</h3></header>","                                        <textarea type=\"text\" name=\"head_line\"  rows=\"3\" cols=\"30\"></textarea>"],"id":560}],[{"start":{"row":79,"column":10},"end":{"row":79,"column":11},"action":"insert","lines":["<"],"id":561}],[{"start":{"row":79,"column":47},"end":{"row":79,"column":55},"action":"remove","lines":["Headline"],"id":562},{"start":{"row":79,"column":47},"end":{"row":79,"column":48},"action":"insert","lines":["C"]},{"start":{"row":79,"column":48},"end":{"row":79,"column":49},"action":"insert","lines":["r"]},{"start":{"row":79,"column":49},"end":{"row":79,"column":50},"action":"insert","lines":["e"]},{"start":{"row":79,"column":50},"end":{"row":79,"column":51},"action":"insert","lines":["w"]}],[{"start":{"row":80,"column":71},"end":{"row":80,"column":72},"action":"remove","lines":["d"],"id":563},{"start":{"row":80,"column":70},"end":{"row":80,"column":71},"action":"remove","lines":["a"]},{"start":{"row":80,"column":69},"end":{"row":80,"column":70},"action":"remove","lines":["e"]},{"start":{"row":80,"column":68},"end":{"row":80,"column":69},"action":"remove","lines":["h"]}],[{"start":{"row":80,"column":68},"end":{"row":80,"column":69},"action":"insert","lines":["c"],"id":564},{"start":{"row":80,"column":69},"end":{"row":80,"column":70},"action":"insert","lines":["r"]},{"start":{"row":80,"column":70},"end":{"row":80,"column":71},"action":"insert","lines":["e"]},{"start":{"row":80,"column":71},"end":{"row":80,"column":72},"action":"insert","lines":["w"]}],[{"start":{"row":80,"column":68},"end":{"row":80,"column":77},"action":"remove","lines":["crew_line"],"id":565},{"start":{"row":80,"column":68},"end":{"row":80,"column":77},"action":"insert","lines":["crew_name"]}],[{"start":{"row":80,"column":86},"end":{"row":80,"column":87},"action":"remove","lines":["3"],"id":566}],[{"start":{"row":80,"column":86},"end":{"row":80,"column":87},"action":"insert","lines":["1"],"id":567}],[{"start":{"row":80,"column":86},"end":{"row":80,"column":87},"action":"remove","lines":["1"],"id":568}],[{"start":{"row":80,"column":86},"end":{"row":80,"column":87},"action":"insert","lines":["2"],"id":569}],[{"start":{"row":80,"column":41},"end":{"row":80,"column":49},"action":"remove","lines":["textarea"],"id":570},{"start":{"row":80,"column":41},"end":{"row":80,"column":46},"action":"insert","lines":["input"]}],[{"start":{"row":80,"column":97},"end":{"row":80,"column":107},"action":"remove","lines":["/textarea>"],"id":571},{"start":{"row":80,"column":96},"end":{"row":80,"column":97},"action":"remove","lines":["<"]}],[{"start":{"row":80,"column":78},"end":{"row":80,"column":95},"action":"remove","lines":["ows=\"2\" cols=\"30\""],"id":572},{"start":{"row":80,"column":77},"end":{"row":80,"column":78},"action":"remove","lines":["r"]},{"start":{"row":80,"column":76},"end":{"row":80,"column":77},"action":"remove","lines":[" "]},{"start":{"row":80,"column":75},"end":{"row":80,"column":76},"action":"remove","lines":[" "]}],[{"start":{"row":80,"column":75},"end":{"row":80,"column":76},"action":"insert","lines":[" "],"id":573},{"start":{"row":80,"column":76},"end":{"row":80,"column":77},"action":"insert","lines":["c"]},{"start":{"row":80,"column":77},"end":{"row":80,"column":78},"action":"insert","lines":["a"]},{"start":{"row":80,"column":78},"end":{"row":80,"column":79},"action":"insert","lines":["l"]},{"start":{"row":80,"column":79},"end":{"row":80,"column":80},"action":"insert","lines":["u"]},{"start":{"row":80,"column":80},"end":{"row":80,"column":81},"action":"insert","lines":["e"]}],[{"start":{"row":80,"column":80},"end":{"row":80,"column":81},"action":"remove","lines":["e"],"id":574},{"start":{"row":80,"column":79},"end":{"row":80,"column":80},"action":"remove","lines":["u"]},{"start":{"row":80,"column":78},"end":{"row":80,"column":79},"action":"remove","lines":["l"]},{"start":{"row":80,"column":77},"end":{"row":80,"column":78},"action":"remove","lines":["a"]},{"start":{"row":80,"column":76},"end":{"row":80,"column":77},"action":"remove","lines":["c"]}],[{"start":{"row":80,"column":76},"end":{"row":80,"column":77},"action":"insert","lines":["v"],"id":575},{"start":{"row":80,"column":77},"end":{"row":80,"column":78},"action":"insert","lines":["a"]},{"start":{"row":80,"column":78},"end":{"row":80,"column":79},"action":"insert","lines":["l"]},{"start":{"row":80,"column":79},"end":{"row":80,"column":80},"action":"insert","lines":["u"]},{"start":{"row":80,"column":80},"end":{"row":80,"column":81},"action":"insert","lines":["e"]}],[{"start":{"row":80,"column":81},"end":{"row":80,"column":82},"action":"insert","lines":["="],"id":576}],[{"start":{"row":80,"column":82},"end":{"row":80,"column":84},"action":"insert","lines":["\"\""],"id":577}],[{"start":{"row":80,"column":83},"end":{"row":80,"column":84},"action":"insert","lines":["T"],"id":578},{"start":{"row":80,"column":84},"end":{"row":80,"column":85},"action":"insert","lines":["a"]},{"start":{"row":80,"column":85},"end":{"row":80,"column":86},"action":"insert","lines":["l"]},{"start":{"row":80,"column":86},"end":{"row":80,"column":87},"action":"insert","lines":["y"]},{"start":{"row":80,"column":87},"end":{"row":80,"column":88},"action":"insert","lines":["o"]}],[{"start":{"row":80,"column":87},"end":{"row":80,"column":88},"action":"remove","lines":["o"],"id":579},{"start":{"row":80,"column":86},"end":{"row":80,"column":87},"action":"remove","lines":["y"]},{"start":{"row":80,"column":85},"end":{"row":80,"column":86},"action":"remove","lines":["l"]}],[{"start":{"row":80,"column":85},"end":{"row":80,"column":86},"action":"insert","lines":["y"],"id":580},{"start":{"row":80,"column":86},"end":{"row":80,"column":87},"action":"insert","lines":["l"]},{"start":{"row":80,"column":87},"end":{"row":80,"column":88},"action":"insert","lines":["o"]},{"start":{"row":80,"column":88},"end":{"row":80,"column":89},"action":"insert","lines":["r"]}],[{"start":{"row":80,"column":89},"end":{"row":80,"column":90},"action":"insert","lines":[" "],"id":581},{"start":{"row":80,"column":90},"end":{"row":80,"column":91},"action":"insert","lines":["a"]},{"start":{"row":80,"column":91},"end":{"row":80,"column":92},"action":"insert","lines":["n"]},{"start":{"row":80,"column":92},"end":{"row":80,"column":93},"action":"insert","lines":["d"]}],[{"start":{"row":80,"column":93},"end":{"row":80,"column":94},"action":"insert","lines":[" "],"id":582},{"start":{"row":80,"column":94},"end":{"row":80,"column":95},"action":"insert","lines":["?"]},{"start":{"row":80,"column":95},"end":{"row":80,"column":96},"action":"insert","lines":["M"]},{"start":{"row":80,"column":96},"end":{"row":80,"column":97},"action":"insert","lines":["a"]},{"start":{"row":80,"column":97},"end":{"row":80,"column":98},"action":"insert","lines":["r"]},{"start":{"row":80,"column":98},"end":{"row":80,"column":99},"action":"insert","lines":["g"]}],[{"start":{"row":80,"column":83},"end":{"row":80,"column":99},"action":"remove","lines":["Taylor and ?Marg"],"id":583},{"start":{"row":80,"column":83},"end":{"row":80,"column":100},"action":"insert","lines":["Taylor & Margaret"]}],[{"start":{"row":152,"column":11},"end":{"row":152,"column":12},"action":"insert","lines":["<"],"id":584}]]},"ace":{"folds":[],"scrolltop":1116,"scrollleft":65.5,"selection":{"start":{"row":80,"column":102},"end":{"row":80,"column":102},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":36,"state":"js-start","mode":"ace/mode/php"}},"timestamp":1570393906871,"hash":"1bd25522314325c99da16e2e62fc812004c294ca"}