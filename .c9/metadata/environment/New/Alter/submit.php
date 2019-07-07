{"filter":false,"title":"submit.php","tooltip":"/New/Alter/submit.php","undoManager":{"mark":83,"position":83,"stack":[[{"start":{"row":49,"column":6},"end":{"row":50,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":50,"column":0},"end":{"row":50,"column":5},"action":"insert","lines":["    \t"]}],[{"start":{"row":50,"column":5},"end":{"row":57,"column":6},"action":"insert","lines":["if ($table == \"faqList\"){","    \t\t$question = pg_escape_string($_POST[\"question\"]);","    \t\t$answer = pg_escape_string($_POST[\"answer\"]);","    \t\t$faqorder = $_POST[\"faqorder\"];","    \t\t$show = pg_escape_string($_POST[\"show\"]);","    \t\t$today = date(\"F j, Y\");","    \t\t$query = \"INSERT INTO faqList (question, answer, faqorder, show, blank_1) VALUES ('$question', '$answer', '$faqorder', '$show', '$today')\";","    \t}"],"id":3}],[{"start":{"row":50,"column":26},"end":{"row":50,"column":27},"action":"remove","lines":["t"],"id":4},{"start":{"row":50,"column":25},"end":{"row":50,"column":26},"action":"remove","lines":["s"]},{"start":{"row":50,"column":24},"end":{"row":50,"column":25},"action":"remove","lines":["i"]},{"start":{"row":50,"column":23},"end":{"row":50,"column":24},"action":"remove","lines":["L"]},{"start":{"row":50,"column":22},"end":{"row":50,"column":23},"action":"remove","lines":["q"]},{"start":{"row":50,"column":21},"end":{"row":50,"column":22},"action":"remove","lines":["a"]},{"start":{"row":50,"column":20},"end":{"row":50,"column":21},"action":"remove","lines":["f"]}],[{"start":{"row":50,"column":20},"end":{"row":50,"column":21},"action":"insert","lines":["t"],"id":5},{"start":{"row":50,"column":21},"end":{"row":50,"column":22},"action":"insert","lines":["e"]},{"start":{"row":50,"column":22},"end":{"row":50,"column":23},"action":"insert","lines":["s"]},{"start":{"row":50,"column":23},"end":{"row":50,"column":24},"action":"insert","lines":["t"]},{"start":{"row":50,"column":24},"end":{"row":50,"column":25},"action":"insert","lines":["i"]},{"start":{"row":50,"column":25},"end":{"row":50,"column":26},"action":"insert","lines":["m"]}],[{"start":{"row":50,"column":26},"end":{"row":50,"column":27},"action":"insert","lines":["n"],"id":6}],[{"start":{"row":50,"column":26},"end":{"row":50,"column":27},"action":"remove","lines":["n"],"id":7}],[{"start":{"row":50,"column":26},"end":{"row":50,"column":27},"action":"insert","lines":["o"],"id":8},{"start":{"row":50,"column":27},"end":{"row":50,"column":28},"action":"insert","lines":["n"]},{"start":{"row":50,"column":28},"end":{"row":50,"column":29},"action":"insert","lines":["i"]},{"start":{"row":50,"column":29},"end":{"row":50,"column":30},"action":"insert","lines":["a"]},{"start":{"row":50,"column":30},"end":{"row":50,"column":31},"action":"insert","lines":["l"]}],[{"start":{"row":51,"column":7},"end":{"row":51,"column":15},"action":"remove","lines":["question"],"id":9},{"start":{"row":51,"column":7},"end":{"row":51,"column":8},"action":"insert","lines":["h"]},{"start":{"row":51,"column":8},"end":{"row":51,"column":9},"action":"insert","lines":["e"]},{"start":{"row":51,"column":9},"end":{"row":51,"column":10},"action":"insert","lines":["a"]},{"start":{"row":51,"column":10},"end":{"row":51,"column":11},"action":"insert","lines":["d"]},{"start":{"row":51,"column":11},"end":{"row":51,"column":12},"action":"insert","lines":["l"]},{"start":{"row":51,"column":12},"end":{"row":51,"column":13},"action":"insert","lines":["i"]},{"start":{"row":51,"column":13},"end":{"row":51,"column":14},"action":"insert","lines":["n"]},{"start":{"row":51,"column":14},"end":{"row":51,"column":15},"action":"insert","lines":["e"]}],[{"start":{"row":51,"column":14},"end":{"row":51,"column":15},"action":"remove","lines":["e"],"id":10},{"start":{"row":51,"column":13},"end":{"row":51,"column":14},"action":"remove","lines":["n"]},{"start":{"row":51,"column":12},"end":{"row":51,"column":13},"action":"remove","lines":["i"]},{"start":{"row":51,"column":11},"end":{"row":51,"column":12},"action":"remove","lines":["l"]},{"start":{"row":51,"column":10},"end":{"row":51,"column":11},"action":"remove","lines":["d"]},{"start":{"row":51,"column":9},"end":{"row":51,"column":10},"action":"remove","lines":["a"]},{"start":{"row":51,"column":8},"end":{"row":51,"column":9},"action":"remove","lines":["e"]},{"start":{"row":51,"column":7},"end":{"row":51,"column":8},"action":"remove","lines":["h"]}],[{"start":{"row":51,"column":7},"end":{"row":51,"column":8},"action":"insert","lines":["t"],"id":11},{"start":{"row":51,"column":8},"end":{"row":51,"column":9},"action":"insert","lines":["i"]},{"start":{"row":51,"column":9},"end":{"row":51,"column":10},"action":"insert","lines":["t"]},{"start":{"row":51,"column":10},"end":{"row":51,"column":11},"action":"insert","lines":["l"]},{"start":{"row":51,"column":11},"end":{"row":51,"column":12},"action":"insert","lines":["e"]}],[{"start":{"row":52,"column":7},"end":{"row":52,"column":13},"action":"remove","lines":["answer"],"id":12}],[{"start":{"row":52,"column":7},"end":{"row":52,"column":8},"action":"insert","lines":["h"],"id":13},{"start":{"row":52,"column":8},"end":{"row":52,"column":9},"action":"insert","lines":["e"]},{"start":{"row":52,"column":9},"end":{"row":52,"column":10},"action":"insert","lines":["a"]},{"start":{"row":52,"column":10},"end":{"row":52,"column":11},"action":"insert","lines":["d"]},{"start":{"row":52,"column":11},"end":{"row":52,"column":12},"action":"insert","lines":["l"]},{"start":{"row":52,"column":12},"end":{"row":52,"column":13},"action":"insert","lines":["i"]},{"start":{"row":52,"column":13},"end":{"row":52,"column":14},"action":"insert","lines":["n"]},{"start":{"row":52,"column":14},"end":{"row":52,"column":15},"action":"insert","lines":["e"]}],[{"start":{"row":53,"column":7},"end":{"row":53,"column":15},"action":"remove","lines":["faqorder"],"id":14},{"start":{"row":53,"column":7},"end":{"row":53,"column":8},"action":"insert","lines":["t"]},{"start":{"row":53,"column":8},"end":{"row":53,"column":9},"action":"insert","lines":["e"]},{"start":{"row":53,"column":9},"end":{"row":53,"column":10},"action":"insert","lines":["s"]},{"start":{"row":53,"column":10},"end":{"row":53,"column":11},"action":"insert","lines":["t"]}],[{"start":{"row":53,"column":11},"end":{"row":53,"column":12},"action":"insert","lines":["i"],"id":15},{"start":{"row":53,"column":12},"end":{"row":53,"column":13},"action":"insert","lines":["m"]},{"start":{"row":53,"column":13},"end":{"row":53,"column":14},"action":"insert","lines":["o"]},{"start":{"row":53,"column":14},"end":{"row":53,"column":15},"action":"insert","lines":["n"]},{"start":{"row":53,"column":15},"end":{"row":53,"column":16},"action":"insert","lines":["i"]},{"start":{"row":53,"column":16},"end":{"row":53,"column":17},"action":"insert","lines":["a"]},{"start":{"row":53,"column":17},"end":{"row":53,"column":18},"action":"insert","lines":["l"]}],[{"start":{"row":51,"column":40},"end":{"row":51,"column":48},"action":"remove","lines":["question"],"id":16},{"start":{"row":51,"column":40},"end":{"row":51,"column":41},"action":"insert","lines":["t"]},{"start":{"row":51,"column":41},"end":{"row":51,"column":42},"action":"insert","lines":["i"]},{"start":{"row":51,"column":42},"end":{"row":51,"column":43},"action":"insert","lines":["t"]}],[{"start":{"row":51,"column":42},"end":{"row":51,"column":43},"action":"remove","lines":["t"],"id":17},{"start":{"row":51,"column":41},"end":{"row":51,"column":42},"action":"remove","lines":["i"]},{"start":{"row":51,"column":40},"end":{"row":51,"column":41},"action":"remove","lines":["t"]}],[{"start":{"row":51,"column":40},"end":{"row":51,"column":41},"action":"insert","lines":["f"],"id":18},{"start":{"row":51,"column":41},"end":{"row":51,"column":42},"action":"insert","lines":["a"]},{"start":{"row":51,"column":42},"end":{"row":51,"column":43},"action":"insert","lines":["m"]},{"start":{"row":51,"column":43},"end":{"row":51,"column":44},"action":"insert","lines":["i"]},{"start":{"row":51,"column":44},"end":{"row":51,"column":45},"action":"insert","lines":["l"]},{"start":{"row":51,"column":45},"end":{"row":51,"column":46},"action":"insert","lines":["y"]}],[{"start":{"row":51,"column":46},"end":{"row":51,"column":47},"action":"insert","lines":["_"],"id":19},{"start":{"row":51,"column":47},"end":{"row":51,"column":48},"action":"insert","lines":["n"]},{"start":{"row":51,"column":48},"end":{"row":51,"column":49},"action":"insert","lines":["a"]},{"start":{"row":51,"column":49},"end":{"row":51,"column":50},"action":"insert","lines":["m"]},{"start":{"row":51,"column":50},"end":{"row":51,"column":51},"action":"insert","lines":["e"]}],[{"start":{"row":52,"column":43},"end":{"row":52,"column":49},"action":"remove","lines":["answer"],"id":20},{"start":{"row":52,"column":43},"end":{"row":52,"column":44},"action":"insert","lines":["h"]},{"start":{"row":52,"column":44},"end":{"row":52,"column":45},"action":"insert","lines":["e"]},{"start":{"row":52,"column":45},"end":{"row":52,"column":46},"action":"insert","lines":["a"]},{"start":{"row":52,"column":46},"end":{"row":52,"column":47},"action":"insert","lines":["d"]},{"start":{"row":52,"column":47},"end":{"row":52,"column":48},"action":"insert","lines":["_"]},{"start":{"row":52,"column":48},"end":{"row":52,"column":49},"action":"insert","lines":["l"]},{"start":{"row":52,"column":49},"end":{"row":52,"column":50},"action":"insert","lines":["i"]},{"start":{"row":52,"column":50},"end":{"row":52,"column":51},"action":"insert","lines":["n"]},{"start":{"row":52,"column":51},"end":{"row":52,"column":52},"action":"insert","lines":["e"]}],[{"start":{"row":53,"column":29},"end":{"row":53,"column":37},"action":"remove","lines":["faqorder"],"id":21},{"start":{"row":53,"column":29},"end":{"row":53,"column":30},"action":"insert","lines":["t"]},{"start":{"row":53,"column":30},"end":{"row":53,"column":31},"action":"insert","lines":["e"]},{"start":{"row":53,"column":31},"end":{"row":53,"column":32},"action":"insert","lines":["s"]},{"start":{"row":53,"column":32},"end":{"row":53,"column":33},"action":"insert","lines":["t"]},{"start":{"row":53,"column":33},"end":{"row":53,"column":34},"action":"insert","lines":["i"]},{"start":{"row":53,"column":34},"end":{"row":53,"column":35},"action":"insert","lines":["m"]},{"start":{"row":53,"column":35},"end":{"row":53,"column":36},"action":"insert","lines":["o"]},{"start":{"row":53,"column":36},"end":{"row":53,"column":37},"action":"insert","lines":["n"]}],[{"start":{"row":53,"column":37},"end":{"row":53,"column":38},"action":"insert","lines":["i"],"id":22},{"start":{"row":53,"column":38},"end":{"row":53,"column":39},"action":"insert","lines":["a"]},{"start":{"row":53,"column":39},"end":{"row":53,"column":40},"action":"insert","lines":["l"]},{"start":{"row":53,"column":40},"end":{"row":53,"column":41},"action":"insert","lines":["_"]},{"start":{"row":53,"column":41},"end":{"row":53,"column":42},"action":"insert","lines":["t"]},{"start":{"row":53,"column":42},"end":{"row":53,"column":43},"action":"insert","lines":["e"]}],[{"start":{"row":53,"column":43},"end":{"row":53,"column":44},"action":"insert","lines":["x"],"id":23},{"start":{"row":53,"column":44},"end":{"row":53,"column":45},"action":"insert","lines":["t"]}],[{"start":{"row":53,"column":48},"end":{"row":54,"column":0},"action":"insert","lines":["",""],"id":24},{"start":{"row":54,"column":0},"end":{"row":54,"column":6},"action":"insert","lines":["    \t\t"]}],[{"start":{"row":54,"column":6},"end":{"row":54,"column":30},"action":"insert","lines":["$today = date(\"F j, Y\");"],"id":25}],[{"start":{"row":54,"column":11},"end":{"row":54,"column":12},"action":"remove","lines":["y"],"id":26},{"start":{"row":54,"column":10},"end":{"row":54,"column":11},"action":"remove","lines":["a"]},{"start":{"row":54,"column":9},"end":{"row":54,"column":10},"action":"remove","lines":["d"]},{"start":{"row":54,"column":8},"end":{"row":54,"column":9},"action":"remove","lines":["o"]},{"start":{"row":54,"column":7},"end":{"row":54,"column":8},"action":"remove","lines":["t"]}],[{"start":{"row":54,"column":7},"end":{"row":54,"column":8},"action":"insert","lines":["t"],"id":27},{"start":{"row":54,"column":8},"end":{"row":54,"column":9},"action":"insert","lines":["o"]},{"start":{"row":54,"column":9},"end":{"row":54,"column":10},"action":"insert","lines":["d"]},{"start":{"row":54,"column":10},"end":{"row":54,"column":11},"action":"insert","lines":["a"]},{"start":{"row":54,"column":11},"end":{"row":54,"column":12},"action":"insert","lines":["y"]}],[{"start":{"row":53,"column":48},"end":{"row":54,"column":0},"action":"insert","lines":["",""],"id":28},{"start":{"row":54,"column":0},"end":{"row":54,"column":6},"action":"insert","lines":["    \t\t"]}],[{"start":{"row":54,"column":6},"end":{"row":54,"column":48},"action":"insert","lines":["$testimonial = $_POST[\"testimonial_text\"];"],"id":29}],[{"start":{"row":54,"column":7},"end":{"row":54,"column":18},"action":"remove","lines":["testimonial"],"id":30},{"start":{"row":54,"column":7},"end":{"row":54,"column":8},"action":"insert","lines":["e"]},{"start":{"row":54,"column":8},"end":{"row":54,"column":9},"action":"insert","lines":["x"]},{"start":{"row":54,"column":9},"end":{"row":54,"column":10},"action":"insert","lines":["t"]},{"start":{"row":54,"column":10},"end":{"row":54,"column":11},"action":"insert","lines":["r"]},{"start":{"row":54,"column":11},"end":{"row":54,"column":12},"action":"insert","lines":["a"]}],[{"start":{"row":54,"column":12},"end":{"row":54,"column":13},"action":"insert","lines":["+"],"id":31},{"start":{"row":54,"column":13},"end":{"row":54,"column":14},"action":"insert","lines":["s"]},{"start":{"row":54,"column":14},"end":{"row":54,"column":15},"action":"insert","lines":["p"]},{"start":{"row":54,"column":15},"end":{"row":54,"column":16},"action":"insert","lines":["a"]},{"start":{"row":54,"column":16},"end":{"row":54,"column":17},"action":"insert","lines":["c"]},{"start":{"row":54,"column":17},"end":{"row":54,"column":18},"action":"insert","lines":["e"]}],[{"start":{"row":54,"column":17},"end":{"row":54,"column":18},"action":"remove","lines":["e"],"id":32},{"start":{"row":54,"column":16},"end":{"row":54,"column":17},"action":"remove","lines":["c"]},{"start":{"row":54,"column":15},"end":{"row":54,"column":16},"action":"remove","lines":["a"]},{"start":{"row":54,"column":14},"end":{"row":54,"column":15},"action":"remove","lines":["p"]},{"start":{"row":54,"column":13},"end":{"row":54,"column":14},"action":"remove","lines":["s"]},{"start":{"row":54,"column":12},"end":{"row":54,"column":13},"action":"remove","lines":["+"]}],[{"start":{"row":54,"column":12},"end":{"row":54,"column":13},"action":"insert","lines":["_"],"id":33},{"start":{"row":54,"column":13},"end":{"row":54,"column":14},"action":"insert","lines":["s"]},{"start":{"row":54,"column":14},"end":{"row":54,"column":15},"action":"insert","lines":["p"]},{"start":{"row":54,"column":15},"end":{"row":54,"column":16},"action":"insert","lines":["a"]},{"start":{"row":54,"column":16},"end":{"row":54,"column":17},"action":"insert","lines":["c"]},{"start":{"row":54,"column":17},"end":{"row":54,"column":18},"action":"insert","lines":["e"]}],[{"start":{"row":54,"column":29},"end":{"row":54,"column":45},"action":"remove","lines":["testimonial_text"],"id":34},{"start":{"row":54,"column":29},"end":{"row":54,"column":30},"action":"insert","lines":["l"]},{"start":{"row":54,"column":30},"end":{"row":54,"column":31},"action":"insert","lines":["i"]},{"start":{"row":54,"column":31},"end":{"row":54,"column":32},"action":"insert","lines":["n"]},{"start":{"row":54,"column":32},"end":{"row":54,"column":33},"action":"insert","lines":["e"]}],[{"start":{"row":54,"column":33},"end":{"row":54,"column":34},"action":"insert","lines":["_"],"id":35},{"start":{"row":54,"column":34},"end":{"row":54,"column":35},"action":"insert","lines":["b"]},{"start":{"row":54,"column":35},"end":{"row":54,"column":36},"action":"insert","lines":["r"]},{"start":{"row":54,"column":36},"end":{"row":54,"column":37},"action":"insert","lines":["e"]},{"start":{"row":54,"column":37},"end":{"row":54,"column":38},"action":"insert","lines":["a"]},{"start":{"row":54,"column":38},"end":{"row":54,"column":39},"action":"insert","lines":["k"]}],[{"start":{"row":54,"column":42},"end":{"row":55,"column":0},"action":"insert","lines":["",""],"id":36},{"start":{"row":55,"column":0},"end":{"row":55,"column":6},"action":"insert","lines":["    \t\t"]}],[{"start":{"row":55,"column":6},"end":{"row":55,"column":47},"action":"insert","lines":["$show = pg_escape_string($_POST[\"show\"]);"],"id":37}],[{"start":{"row":57,"column":6},"end":{"row":57,"column":47},"action":"remove","lines":["$show = pg_escape_string($_POST[\"show\"]);"],"id":38},{"start":{"row":57,"column":5},"end":{"row":57,"column":6},"action":"remove","lines":["\t"]},{"start":{"row":57,"column":4},"end":{"row":57,"column":5},"action":"remove","lines":["\t"]},{"start":{"row":57,"column":0},"end":{"row":57,"column":4},"action":"remove","lines":["    "]},{"start":{"row":56,"column":30},"end":{"row":57,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":56,"column":0},"end":{"row":56,"column":30},"action":"remove","lines":["    \t\t$today = date(\"F j, Y\");"],"id":39},{"start":{"row":55,"column":47},"end":{"row":56,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":57,"column":34},"end":{"row":57,"column":35},"action":"remove","lines":["t"],"id":40},{"start":{"row":57,"column":33},"end":{"row":57,"column":34},"action":"remove","lines":["s"]},{"start":{"row":57,"column":32},"end":{"row":57,"column":33},"action":"remove","lines":["i"]},{"start":{"row":57,"column":31},"end":{"row":57,"column":32},"action":"remove","lines":["L"]},{"start":{"row":57,"column":30},"end":{"row":57,"column":31},"action":"remove","lines":["q"]},{"start":{"row":57,"column":29},"end":{"row":57,"column":30},"action":"remove","lines":["a"]},{"start":{"row":57,"column":28},"end":{"row":57,"column":29},"action":"remove","lines":["f"]}],[{"start":{"row":57,"column":28},"end":{"row":57,"column":29},"action":"insert","lines":["t"],"id":41},{"start":{"row":57,"column":29},"end":{"row":57,"column":30},"action":"insert","lines":["e"]},{"start":{"row":57,"column":30},"end":{"row":57,"column":31},"action":"insert","lines":["s"]},{"start":{"row":57,"column":31},"end":{"row":57,"column":32},"action":"insert","lines":["t"]}],[{"start":{"row":57,"column":28},"end":{"row":57,"column":32},"action":"remove","lines":["test"],"id":42},{"start":{"row":57,"column":28},"end":{"row":57,"column":39},"action":"insert","lines":["testimonial"]}],[{"start":{"row":57,"column":41},"end":{"row":57,"column":49},"action":"remove","lines":["question"],"id":43},{"start":{"row":57,"column":41},"end":{"row":57,"column":42},"action":"insert","lines":["t"]},{"start":{"row":57,"column":42},"end":{"row":57,"column":43},"action":"insert","lines":["i"]},{"start":{"row":57,"column":43},"end":{"row":57,"column":44},"action":"insert","lines":["t"]},{"start":{"row":57,"column":44},"end":{"row":57,"column":45},"action":"insert","lines":["l"]},{"start":{"row":57,"column":45},"end":{"row":57,"column":46},"action":"insert","lines":["e"]}],[{"start":{"row":57,"column":48},"end":{"row":57,"column":54},"action":"remove","lines":["answer"],"id":44},{"start":{"row":57,"column":48},"end":{"row":57,"column":49},"action":"insert","lines":["h"]},{"start":{"row":57,"column":49},"end":{"row":57,"column":50},"action":"insert","lines":["e"]},{"start":{"row":57,"column":50},"end":{"row":57,"column":51},"action":"insert","lines":["a"]},{"start":{"row":57,"column":51},"end":{"row":57,"column":52},"action":"insert","lines":["d"]},{"start":{"row":57,"column":52},"end":{"row":57,"column":53},"action":"insert","lines":["l"]},{"start":{"row":57,"column":53},"end":{"row":57,"column":54},"action":"insert","lines":["i"]},{"start":{"row":57,"column":54},"end":{"row":57,"column":55},"action":"insert","lines":["n"]},{"start":{"row":57,"column":55},"end":{"row":57,"column":56},"action":"insert","lines":["e"]}],[{"start":{"row":57,"column":58},"end":{"row":57,"column":66},"action":"remove","lines":["faqorder"],"id":45},{"start":{"row":57,"column":58},"end":{"row":57,"column":59},"action":"insert","lines":["t"]},{"start":{"row":57,"column":59},"end":{"row":57,"column":60},"action":"insert","lines":["e"]},{"start":{"row":57,"column":60},"end":{"row":57,"column":61},"action":"insert","lines":["s"]},{"start":{"row":57,"column":61},"end":{"row":57,"column":62},"action":"insert","lines":["t"]},{"start":{"row":57,"column":62},"end":{"row":57,"column":63},"action":"insert","lines":["i"]},{"start":{"row":57,"column":63},"end":{"row":57,"column":64},"action":"insert","lines":["m"]},{"start":{"row":57,"column":64},"end":{"row":57,"column":65},"action":"insert","lines":["n"]}],[{"start":{"row":57,"column":64},"end":{"row":57,"column":65},"action":"remove","lines":["n"],"id":46}],[{"start":{"row":57,"column":64},"end":{"row":57,"column":65},"action":"insert","lines":["o"],"id":47},{"start":{"row":57,"column":65},"end":{"row":57,"column":66},"action":"insert","lines":["n"]},{"start":{"row":57,"column":66},"end":{"row":57,"column":67},"action":"insert","lines":["i"]},{"start":{"row":57,"column":67},"end":{"row":57,"column":68},"action":"insert","lines":["a"]},{"start":{"row":57,"column":68},"end":{"row":57,"column":69},"action":"insert","lines":["l"]}],[{"start":{"row":57,"column":71},"end":{"row":57,"column":75},"action":"remove","lines":["show"],"id":48},{"start":{"row":57,"column":71},"end":{"row":57,"column":72},"action":"insert","lines":["d"]},{"start":{"row":57,"column":72},"end":{"row":57,"column":73},"action":"insert","lines":["a"]},{"start":{"row":57,"column":73},"end":{"row":57,"column":74},"action":"insert","lines":["t"]},{"start":{"row":57,"column":74},"end":{"row":57,"column":75},"action":"insert","lines":["e"]}],[{"start":{"row":57,"column":76},"end":{"row":57,"column":77},"action":"insert","lines":[","],"id":49},{"start":{"row":57,"column":77},"end":{"row":57,"column":78},"action":"insert","lines":["e"]},{"start":{"row":57,"column":78},"end":{"row":57,"column":79},"action":"insert","lines":["x"]}],[{"start":{"row":57,"column":78},"end":{"row":57,"column":79},"action":"remove","lines":["x"],"id":50},{"start":{"row":57,"column":77},"end":{"row":57,"column":78},"action":"remove","lines":["e"]}],[{"start":{"row":57,"column":77},"end":{"row":57,"column":78},"action":"insert","lines":[" "],"id":51}],[{"start":{"row":57,"column":77},"end":{"row":57,"column":78},"action":"remove","lines":[" "],"id":52},{"start":{"row":57,"column":76},"end":{"row":57,"column":77},"action":"remove","lines":[","]}],[{"start":{"row":57,"column":76},"end":{"row":57,"column":77},"action":"insert","lines":[" "],"id":53},{"start":{"row":57,"column":77},"end":{"row":57,"column":78},"action":"insert","lines":["e"]},{"start":{"row":57,"column":78},"end":{"row":57,"column":79},"action":"insert","lines":["x"]},{"start":{"row":57,"column":79},"end":{"row":57,"column":80},"action":"insert","lines":["t"]},{"start":{"row":57,"column":80},"end":{"row":57,"column":81},"action":"insert","lines":["r"]},{"start":{"row":57,"column":81},"end":{"row":57,"column":82},"action":"insert","lines":["a"]}],[{"start":{"row":57,"column":82},"end":{"row":57,"column":83},"action":"insert","lines":["_"],"id":54},{"start":{"row":57,"column":83},"end":{"row":57,"column":84},"action":"insert","lines":["S"]},{"start":{"row":57,"column":84},"end":{"row":57,"column":85},"action":"insert","lines":["p"]},{"start":{"row":57,"column":85},"end":{"row":57,"column":86},"action":"insert","lines":["a"]},{"start":{"row":57,"column":86},"end":{"row":57,"column":87},"action":"insert","lines":["c"]},{"start":{"row":57,"column":87},"end":{"row":57,"column":88},"action":"insert","lines":["e"]},{"start":{"row":57,"column":88},"end":{"row":57,"column":89},"action":"insert","lines":[","]}],[{"start":{"row":57,"column":88},"end":{"row":57,"column":89},"action":"remove","lines":[","],"id":55},{"start":{"row":57,"column":87},"end":{"row":57,"column":88},"action":"remove","lines":["e"]},{"start":{"row":57,"column":86},"end":{"row":57,"column":87},"action":"remove","lines":["c"]},{"start":{"row":57,"column":85},"end":{"row":57,"column":86},"action":"remove","lines":["a"]},{"start":{"row":57,"column":84},"end":{"row":57,"column":85},"action":"remove","lines":["p"]},{"start":{"row":57,"column":83},"end":{"row":57,"column":84},"action":"remove","lines":["S"]}],[{"start":{"row":57,"column":83},"end":{"row":57,"column":84},"action":"insert","lines":["s"],"id":56},{"start":{"row":57,"column":84},"end":{"row":57,"column":85},"action":"insert","lines":["p"]},{"start":{"row":57,"column":85},"end":{"row":57,"column":86},"action":"insert","lines":["a"]},{"start":{"row":57,"column":86},"end":{"row":57,"column":87},"action":"insert","lines":["c"]},{"start":{"row":57,"column":87},"end":{"row":57,"column":88},"action":"insert","lines":["e"]}],[{"start":{"row":57,"column":88},"end":{"row":57,"column":89},"action":"insert","lines":[","],"id":57}],[{"start":{"row":57,"column":89},"end":{"row":57,"column":90},"action":"insert","lines":[" "],"id":58},{"start":{"row":57,"column":90},"end":{"row":57,"column":91},"action":"insert","lines":["s"]},{"start":{"row":57,"column":91},"end":{"row":57,"column":92},"action":"insert","lines":["h"]},{"start":{"row":57,"column":92},"end":{"row":57,"column":93},"action":"insert","lines":["o"]},{"start":{"row":57,"column":93},"end":{"row":57,"column":94},"action":"insert","lines":["w"]}],[{"start":{"row":57,"column":101},"end":{"row":57,"column":102},"action":"remove","lines":["1"],"id":59},{"start":{"row":57,"column":100},"end":{"row":57,"column":101},"action":"remove","lines":["_"]},{"start":{"row":57,"column":99},"end":{"row":57,"column":100},"action":"remove","lines":["k"]},{"start":{"row":57,"column":98},"end":{"row":57,"column":99},"action":"remove","lines":["n"]},{"start":{"row":57,"column":97},"end":{"row":57,"column":98},"action":"remove","lines":["a"]},{"start":{"row":57,"column":96},"end":{"row":57,"column":97},"action":"remove","lines":["l"]},{"start":{"row":57,"column":95},"end":{"row":57,"column":96},"action":"remove","lines":["b"]},{"start":{"row":57,"column":94},"end":{"row":57,"column":95},"action":"remove","lines":[" "]}],[{"start":{"row":56,"column":0},"end":{"row":56,"column":30},"action":"remove","lines":["    \t\t$today = date(\"F j, Y\");"],"id":60}],[{"start":{"row":53,"column":48},"end":{"row":54,"column":0},"action":"insert","lines":["",""],"id":61},{"start":{"row":54,"column":0},"end":{"row":54,"column":6},"action":"insert","lines":["    \t\t"]}],[{"start":{"row":54,"column":6},"end":{"row":54,"column":36},"action":"insert","lines":["    \t\t$today = date(\"F j, Y\");"],"id":62}],[{"start":{"row":54,"column":11},"end":{"row":54,"column":12},"action":"remove","lines":["\t"],"id":63},{"start":{"row":54,"column":10},"end":{"row":54,"column":11},"action":"remove","lines":["\t"]},{"start":{"row":54,"column":9},"end":{"row":54,"column":10},"action":"remove","lines":[" "]},{"start":{"row":54,"column":8},"end":{"row":54,"column":9},"action":"remove","lines":[" "]},{"start":{"row":54,"column":7},"end":{"row":54,"column":8},"action":"remove","lines":[" "]},{"start":{"row":54,"column":6},"end":{"row":54,"column":7},"action":"remove","lines":[" "]}],[{"start":{"row":56,"column":47},"end":{"row":57,"column":0},"action":"remove","lines":["",""],"id":64}],[{"start":{"row":57,"column":105},"end":{"row":57,"column":114},"action":"remove","lines":["$question"],"id":65},{"start":{"row":57,"column":105},"end":{"row":57,"column":106},"action":"insert","lines":["$"]},{"start":{"row":57,"column":106},"end":{"row":57,"column":107},"action":"insert","lines":["t"]},{"start":{"row":57,"column":107},"end":{"row":57,"column":108},"action":"insert","lines":["i"]},{"start":{"row":57,"column":108},"end":{"row":57,"column":109},"action":"insert","lines":["t"]},{"start":{"row":57,"column":109},"end":{"row":57,"column":110},"action":"insert","lines":["l"]},{"start":{"row":57,"column":110},"end":{"row":57,"column":111},"action":"insert","lines":["e"]}],[{"start":{"row":57,"column":121},"end":{"row":57,"column":122},"action":"remove","lines":["r"],"id":66},{"start":{"row":57,"column":120},"end":{"row":57,"column":121},"action":"remove","lines":["e"]},{"start":{"row":57,"column":119},"end":{"row":57,"column":120},"action":"remove","lines":["w"]},{"start":{"row":57,"column":118},"end":{"row":57,"column":119},"action":"remove","lines":["s"]},{"start":{"row":57,"column":117},"end":{"row":57,"column":118},"action":"remove","lines":["n"]},{"start":{"row":57,"column":116},"end":{"row":57,"column":117},"action":"remove","lines":["a"]}],[{"start":{"row":57,"column":116},"end":{"row":57,"column":117},"action":"insert","lines":["h"],"id":67},{"start":{"row":57,"column":117},"end":{"row":57,"column":118},"action":"insert","lines":["e"]},{"start":{"row":57,"column":118},"end":{"row":57,"column":119},"action":"insert","lines":["a"]},{"start":{"row":57,"column":119},"end":{"row":57,"column":120},"action":"insert","lines":["d"]},{"start":{"row":57,"column":120},"end":{"row":57,"column":121},"action":"insert","lines":["l"]},{"start":{"row":57,"column":121},"end":{"row":57,"column":122},"action":"insert","lines":["i"]},{"start":{"row":57,"column":122},"end":{"row":57,"column":123},"action":"insert","lines":["n"]},{"start":{"row":57,"column":123},"end":{"row":57,"column":124},"action":"insert","lines":["e"]}],[{"start":{"row":57,"column":129},"end":{"row":57,"column":137},"action":"remove","lines":["faqorder"],"id":68},{"start":{"row":57,"column":129},"end":{"row":57,"column":130},"action":"insert","lines":["t"]},{"start":{"row":57,"column":130},"end":{"row":57,"column":131},"action":"insert","lines":["e"]},{"start":{"row":57,"column":131},"end":{"row":57,"column":132},"action":"insert","lines":["s"]},{"start":{"row":57,"column":132},"end":{"row":57,"column":133},"action":"insert","lines":["t"]},{"start":{"row":57,"column":133},"end":{"row":57,"column":134},"action":"insert","lines":["i"]},{"start":{"row":57,"column":134},"end":{"row":57,"column":135},"action":"insert","lines":["m"]}],[{"start":{"row":57,"column":135},"end":{"row":57,"column":136},"action":"insert","lines":["o"],"id":69},{"start":{"row":57,"column":136},"end":{"row":57,"column":137},"action":"insert","lines":["n"]},{"start":{"row":57,"column":137},"end":{"row":57,"column":138},"action":"insert","lines":["i"]},{"start":{"row":57,"column":138},"end":{"row":57,"column":139},"action":"insert","lines":["a"]},{"start":{"row":57,"column":139},"end":{"row":57,"column":140},"action":"insert","lines":["l"]}],[{"start":{"row":57,"column":148},"end":{"row":57,"column":149},"action":"remove","lines":["w"],"id":70},{"start":{"row":57,"column":147},"end":{"row":57,"column":148},"action":"remove","lines":["o"]},{"start":{"row":57,"column":146},"end":{"row":57,"column":147},"action":"remove","lines":["h"]},{"start":{"row":57,"column":145},"end":{"row":57,"column":146},"action":"remove","lines":["s"]}],[{"start":{"row":57,"column":145},"end":{"row":57,"column":146},"action":"insert","lines":["t"],"id":71},{"start":{"row":57,"column":146},"end":{"row":57,"column":147},"action":"insert","lines":["o"]},{"start":{"row":57,"column":147},"end":{"row":57,"column":148},"action":"insert","lines":["d"]},{"start":{"row":57,"column":148},"end":{"row":57,"column":149},"action":"insert","lines":["a"]},{"start":{"row":57,"column":149},"end":{"row":57,"column":150},"action":"insert","lines":["y"]}],[{"start":{"row":57,"column":159},"end":{"row":57,"column":160},"action":"remove","lines":["y"],"id":72},{"start":{"row":57,"column":158},"end":{"row":57,"column":159},"action":"remove","lines":["a"]},{"start":{"row":57,"column":157},"end":{"row":57,"column":158},"action":"remove","lines":["d"]},{"start":{"row":57,"column":156},"end":{"row":57,"column":157},"action":"remove","lines":["o"]},{"start":{"row":57,"column":155},"end":{"row":57,"column":156},"action":"remove","lines":["t"]}],[{"start":{"row":57,"column":155},"end":{"row":57,"column":156},"action":"insert","lines":["e"],"id":73},{"start":{"row":57,"column":156},"end":{"row":57,"column":157},"action":"insert","lines":["x"]},{"start":{"row":57,"column":157},"end":{"row":57,"column":158},"action":"insert","lines":["t"]},{"start":{"row":57,"column":158},"end":{"row":57,"column":159},"action":"insert","lines":["r"]},{"start":{"row":57,"column":159},"end":{"row":57,"column":160},"action":"insert","lines":["a"]}],[{"start":{"row":57,"column":160},"end":{"row":57,"column":161},"action":"insert","lines":["_"],"id":74},{"start":{"row":57,"column":161},"end":{"row":57,"column":162},"action":"insert","lines":["s"]},{"start":{"row":57,"column":162},"end":{"row":57,"column":163},"action":"insert","lines":["p"]},{"start":{"row":57,"column":163},"end":{"row":57,"column":164},"action":"insert","lines":["a"]},{"start":{"row":57,"column":164},"end":{"row":57,"column":165},"action":"insert","lines":["c"]},{"start":{"row":57,"column":165},"end":{"row":57,"column":166},"action":"insert","lines":["e"]},{"start":{"row":57,"column":166},"end":{"row":57,"column":167},"action":"insert","lines":[","]}],[{"start":{"row":57,"column":167},"end":{"row":57,"column":168},"action":"insert","lines":[" "],"id":75},{"start":{"row":57,"column":168},"end":{"row":57,"column":169},"action":"insert","lines":["$"]},{"start":{"row":57,"column":169},"end":{"row":57,"column":170},"action":"insert","lines":["s"]},{"start":{"row":57,"column":170},"end":{"row":57,"column":171},"action":"insert","lines":["h"]}],[{"start":{"row":57,"column":171},"end":{"row":57,"column":172},"action":"insert","lines":["o"],"id":76},{"start":{"row":57,"column":172},"end":{"row":57,"column":173},"action":"insert","lines":["w"]}],[{"start":{"row":57,"column":168},"end":{"row":57,"column":169},"action":"insert","lines":["'"],"id":77}],[{"start":{"row":57,"column":166},"end":{"row":57,"column":167},"action":"insert","lines":["'"],"id":78}],[{"start":{"row":43,"column":6},"end":{"row":44,"column":0},"action":"insert","lines":["",""],"id":79},{"start":{"row":44,"column":0},"end":{"row":44,"column":5},"action":"insert","lines":["    \t"]}],[{"start":{"row":44,"column":5},"end":{"row":44,"column":51},"action":"insert","lines":["            // this table is being depreciated"],"id":80}],[{"start":{"row":44,"column":16},"end":{"row":44,"column":17},"action":"remove","lines":[" "],"id":81},{"start":{"row":44,"column":12},"end":{"row":44,"column":16},"action":"remove","lines":["    "]},{"start":{"row":44,"column":8},"end":{"row":44,"column":12},"action":"remove","lines":["    "]},{"start":{"row":44,"column":7},"end":{"row":44,"column":8},"action":"remove","lines":[" "]},{"start":{"row":44,"column":6},"end":{"row":44,"column":7},"action":"remove","lines":[" "]},{"start":{"row":44,"column":5},"end":{"row":44,"column":6},"action":"remove","lines":[" "]}],[{"start":{"row":51,"column":31},"end":{"row":51,"column":32},"action":"insert","lines":["s"],"id":82}],[{"start":{"row":58,"column":39},"end":{"row":58,"column":40},"action":"insert","lines":["s"],"id":83}],[{"start":{"row":124,"column":2},"end":{"row":125,"column":0},"action":"remove","lines":["",""],"id":84}],[{"start":{"row":58,"column":72},"end":{"row":58,"column":76},"action":"remove","lines":["date"],"id":85},{"start":{"row":58,"column":72},"end":{"row":58,"column":80},"action":"insert","lines":["tripdate"]}]]},"ace":{"folds":[],"scrolltop":667.5,"scrollleft":0,"selection":{"start":{"row":54,"column":29},"end":{"row":54,"column":45},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":57,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1562531873898,"hash":"a1289a06df41810fe3767606888234318dd69004"}