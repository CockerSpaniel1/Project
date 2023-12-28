-- phpMyAdmin SQL Dump
-- version 5.1.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2021-01-27 03:57:35
-- 伺服器版本: 10.1.9-MariaDB
-- PHP 版本： 8.0.7

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `shop`
--
-- CREATE DATABASE IF NOT EXISTS `product` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
CREATE DATABASE IF NOT EXISTS `chocolate_db` DEFAULT CHARACTER SET utf8;
--COLLATE utf8mb4_unicode_ci;
USE `chocolate_db`;

-- --------------------------------------------------------

--
-- 資料表結構 `books`
--

CREATE TABLE `chocolate` (
  `Data_orderid` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Data_pid` VARCHAR(15) NOT NULL DEFAULT '',
  `Data_name` VARCHAR(50) NOT NULL DEFAULT '',
  `Data_brand` VARCHAR(20) NOT NULL DEFAULT '',
  `Data_price` INT NOT NULL DEFAULT '0',
  `Data_quantiy` INT NOT NULL DEFAULT '99'
) 

/**ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='圖書資料';
/**刪掉的[箱購]1423023900112 ,1423028200112, 1423200200104, 1423015600112, 1423015500112   

--
-- 資料表的匯出資料 `books`
--/**('1423219500101', '義美杏仁巧克球(黑可可)117g', '義美', 89.0)
('1423062400101', 'KitKat威化巧克力濃黑巧克力口味3入', 'KitKat', 39.0),
('1423113600101', '77乳加迷你量販包', '77', 129.0)**/

INSERT INTO `chocolate` (`Data_pid`, `Data_name`, `Data_brand`, `Data_price`) 
VALUES ("1423219500101","義美杏仁巧克球(黑可可)117g","義美",89.0),("1423217800101","義美杏仁巧克球117G","義美",89.0),("1423062400101","KitKat威化巧克力濃黑巧克力口味3入","KitKat",39.0),("1423113600101","77乳加迷你量販包","77",129.0),("1423022700101","義美葡萄QQ糖巧克球160g","義美",89.0),("1423044800101","甘百世大葡萄乾巧克力80g","甘百世",55.0),("1423012100101","韓國樂天杏仁可可球46g","LOTTE",45.0),("1423053500101","義美超大葡萄乾巧克力(牛奶巧克力)144g","義美",89.0),("1423018300101","健達繽紛樂(白)5入裝195g","健達",139.0),("1423100700101","健達繽紛樂超值包43g*3","健達",86.0),("1423052700101","義美草莓煉乳QQ糖巧克球160g","義美",89.0),("1423103700101","健達繽紛樂5入裝215g","健達",139.0),("1423053400101","義美超大葡萄乾巧克力135g","義美",78.0),("1423217900101","義美杏仁巧克球(黑可可)135G","義美",94.0),("1423204100101","士力架花生巧克力隨手包20入裝","士力架",175.0),("1423015500101","麥提莎麥芽脆心黑巧克力分享包 144g","麥提莎",139.0),("1423212400101","77屏東可可雙堅果乳加178g","77",89.0),("1423009300101","甘百世凱撒巧克力糖150g","甘百世",50.0),("1423044100101","甘百世凱撒白巧克力糖150g","甘百世",50.0),("1423015600101","麥提莎麥芽脆心巧克力分享包144g","麥提莎",139.0),("1423303900101","瑞士蓮 極醇系列78%巧克力片 100g","瑞士蓮",151.0),("1423217700101","義美杏仁巧克球(牛奶巧克力)135G","義美",94.0),("1423204600101","甘百世榛果(白牛奶)78g","甘百世",60.0),("1423010500101","健達巧克力含牛奶內餡迷你120g","健達",86.0),("1423014800101","瑞士三角牛奶巧克力迷你裝","null",129.0),("1423033800101","特趣迷你焦糖夾心巧克力重量包34入","特趣",175.0),("1423029600101","ROUGE脆餅牛奶可可製品","ROUGE",239.0),("1423052000101","義美葡萄QQ糖巧克球135g","義美",78.0),("1423304700101","多樂72%醇黑巧克力","多樂TORRAS",108.0),("1423306700101","多樂香蕉醇黑巧克力","多樂TORRAS",108.0),("1423114800101","77黑巧杏仁乳加 238g","77",119.0),("1423306200101","家樂福精選杏桃杏仁迷迭香巧克力100g","家樂福",59.0),("1423002700101","有樂家庭迷你雷神可可風味餅乾","有樂製菓",115.0),("1423212900101","Kisses杏仁夾餡牛奶巧克力36g克","Kisses",39.0),("1423010100101","有樂迷你雷神杏仁堅果可可味餅乾","有樂製菓",129.0),("1423209300101","Kisses水滴杏仁夾餡牛奶巧克力82g","Kisses",76.0),("1423025000101","好時巧酥可可風味片40g","Hershey's",35.0),("1423010700101","麥提莎金脆焦糖風味可可球 132g","麥提莎",139.0),("1423009600101","77哈哈球324g","77",93.0),("1423039800101","義美草莓QQ糖巧克球135g","義美",78.0),("1423045100101","甘百世冬之願巧克力70g","甘百世",49.0),("1423201700101","瑞士三角牛奶巧克力含葡萄乾蜂蜜奶油杏仁","瑞士TOBLERONE 瑞士三角",64.0),("1423114500101","77綜合堅果乳加 238g","77",119.0),("1423101500101","瑞士三角黑巧克力迷你裝","TOBLERONE 瑞士三角",129.0),("1423005200101","士力架花生巧克力隨手包37入","士力架",319.0),("1423309300101","家樂福精選黑醋栗碎餅黑巧克力","家樂福",59.0),("1423201800101","金莎30粒分享盒裝375g","費列羅",305.0),("1423308000101","家樂福精選鹽之花焦糖牛奶巧克力","家樂福",59.0),("1423006800101","瑞士三角迷你白巧克力","TOBLERONE",129.0),("1423219600101","瑞士三角牛奶巧克力-脆杏仁口味","TOBLERONE",129.0),("1423002500101","甘百世香濃牛奶巧克力70g","甘百世",49.0),("1423309400101","家樂福精選覆盆子脆餅黑巧克力","家樂福",59.0),("1423102900101","健達巧克力含牛奶內餡200g","健達",105.0),("1423056500101","RitterSport 餅乾可可製品","Ritter Sport力特律動",89.0),("1423026500101","健達倍多6入裝126g","null",63.0),("1423061400101","明治牛奶巧克力-分享包100g*商品包裝隨機出貨不挑款，以實際出貨為準。","明治食品",109.0),("1423218100101","義美生機草莓巧克力莓果","義美生機",69.0),("1423005600101","健達奇趣蛋藍色版單蛋","null",31.0),("1423314100101","家樂福精選鹽之花黑巧克力","家樂福",59.0),("2003514500101","黑師傅捲心酥(巧克力)","黑師傅",198.0),("1423016900101","好時杏仁夾餡牛奶巧克力片裝100g","好時Hershey's",66.0),("1423306000101","家樂福精選芒果花椒黑巧克力","家樂福",59.0),("1423056100101","Ritter Sport 可可慕斯可可製品","Ritter Sport力特律動",89.0),("1423215100101","杏仁夾餡牛奶巧克力片裝","好時Hershey's",33.0),("1423200400101","士力架花生巧克力隨手包","null",121.0),("1423025400101","樂天加納牛奶可可製品片裝","LOTTE",38.0),("1423308500101","家樂福精選薄荷風味黑巧克力","家樂福",59.0),("1423055800101","Ritter Sport 優格可可製品","Ritter Sport力特律動",89.0),("1423023900101","MMS花生糖衣巧克力284.9g","M&M's",179.0),("1423304500101","歐維氏77％醇黑巧克力205.2g","77",175.0),("1423054500101","Tonys Chocolonely 布朗尼牛奶巧克力180g","Tony's Chocolonely",179.0),("1423012600101","瑞士三角白巧克力(含蜂蜜及杏仁) 100g","null",62.0),("1423301200101","瑞士三角黑巧克力100g","TOBLERONE",62.0),("1423008200101","韓國Sweetory葡萄QQ可可球","韓國Sweetory",42.0),("1423050100101","好時牛奶巧克力(袋裝)","Hershey's好時",99.0),("1423044700101","甘百世杏仁白巧克力糖70g","甘百世",49.0),("1423015700101","麥提莎麥芽脆心黑巧克力90g","麥提莎",99.0),("1423004100101","雀巢Kitkat 草莓味威化餅 124.3g","null",119.0),("1423312100101","歐維氏77%醇黑巧克力77g","77",49.0),("1423050200101","好時巧酥可可風味片(袋裝)","Hershey's好時",99.0),("1423114700101","77 70%極濃黑巧乳加","77",119.0),("1423004700101","雀巢Kitkat 抹茶可可味威化餅 124.3g","null",119.0),("1423219900101","明治杏仁可可球(盒裝)79g","明治食品",68.0),("1423300900101","明治CACAO 72%黑巧克力26枚盒裝130g","明治",123.0),("1423313400101","Trapa精選85％黑巧克力片85g","Trapa",119.0),("1423019100101","松尾綜合可可製品","松尾",169.0),("1423310200101","甘百世72％黑巧克力70g","甘百世",49.0),("1423311800101","韓國樂天骰子巧克力82%","LOTTE",79.0),("1423018200101","Hershey's好時 Drops巧酥夾餡可可風味球 60g","好時Hershey's",88.0),("1423044400101","甘百世凱撒草莓巧克力糖150g","甘百世",50.0),("1423058300101","比利時鹹焦糖脆粒牛奶巧克力","The Belgian",95.0),("1423016600101","好時黑巧克力片裝","Hershey's好時",39.0),("1423017600101","明治 Meltykiss抹茶夾餡可可粒 52g","明治食品",75.0),("1423004300101","明治 牛奶巧克力 120g","明治",99.0),("1423210300101","Tonys Chocolonely杏仁海鹽黑巧克力180g","Tony’s Chocolonely",179.0),("1423300500101","家樂福精選坦桑尼亞特黑巧克力85%-80g","家樂福",59.0),("1423205300101","樂家 巧克力杏仁糖 140g","樂家",215.0),("1423025300101","明治 Meltykiss草莓夾餡可可粒 52g","明治食品",75.0),("1423206800101","金莎五粒裝62.5g","費列羅",56.0),("1423054600101","Ritter Sport 牛奶可可製品","Ritter Sport力特律動",89.0),("1423045000101","樂家 巧克力杏仁糖(焦糖海鹽口味) 140g","樂家",215.0),("1423028200101","MMS牛奶糖衣巧克力283.5g","M&M's",179.0),("1423207800101","金莎三粒裝37.5g","費列羅",35.0),("1423057400101","Baileys 焦糖海鹽可可製品","Bailey's",259.0),("1423044300101","甘百世巧克力粉杏仁豆70g","甘百世",49.0),("1423057500101","Baileys 草莓奶酒可可製品 205g","Bailey's",259.0),("1423030000101","M&M's脆心牛奶巧克力樂享包144g","M&M's",145.0),("1423114600101","77乳加 299.2g","77",152.0),("1423304400101","歐維氏85%醇黑巧克力176.7g","77",129.0),("1423046300101","迷你樂家巧克力杏仁糖","樂家",159.0),("1423001500101","健達奇趣蛋粉紅色版3蛋裝","健達",98.0),("1423004800101","健達奇趣蛋粉紅色版單蛋","null",31.0),("1423207500101","金莎T16分享盒裝200g","費列羅",205.0),("1423040200101","Whittakers花生夾餡牛奶巧克力-分享包","Whittaker's",199.0),("1423056600101","Baileys 奶酒可可製品 90g","Bailey's",89.0),("1423302200101","歐維氏-90％醇黑巧克力 77g","null",60.0),("1423310500101","韓國樂天骰子巧克力72%","LOTTE",79.0),("1423204500101","甘百世榛果84g","甘百世",60.0),("1423318000101","凱薩71％哥斯大黎加可可豆醇黑巧克力100g","凱薩",128.0),("1423055100101","Kitkat牛奶可可味威化餅","Kitkat",119.0),("1423049500101","好時巧酥可可風味金磚(分享包)","Hershey's好時",99.0),("1423032800101","KitKat期間限定甘栗116g","Kitkat",250.0),("1423017800101","明治 Meltykiss牛奶可可粒 56g","明治食品",75.0),("1423317100101","凱薩80％烏干達可可豆醇黑巧克力100g","凱薩",128.0),("1423063100101","瓦維爾海鹽太妃70%黑巧克力","瓦維爾",99.0),("1423029800101","凱薩杏仁柳橙夾心醇黑巧克力","CACHET凱薩",128.0),("1423305000101","家樂福精選特黑巧克力72%","家樂福",59.0),("1423019400101","阿尼驚喜蛋60g*商品包裝隨機出貨不挑款，以實際出貨為準。","阿尼Zaini",119.0),("1423033700101","萬聖夾心牛奶巧克力網袋 100g【Mia C'bon Only】","null",69.0),("1423302500101","家樂福精選特黑巧克力90%-80g","家樂福",59.0),("1423311100101","凱薩70%海鹽醇黑巧克力","CACHET凱薩",128.0),("1423034300101","Galler70%橙香醇黑巧克力","Galler",109.0),("1423048800101","GDV迷你牛奶巧克力棒-焦糖","GODIVA",129.0),("1423301700101","LOTTE 60%可可製品盒裝","LOTTE",59.0),("1423305100101","瑞士蓮Lindor 夾餡60％黑巧克力 200g","瑞士蓮",199.0),("1423029300101","凱薩焦糖海鹽夾心牛奶巧克力","CACHET凱薩",128.0),("1423014700101","瑞士三角牛奶巧克力-脆杏仁","TOBLERONE",62.0),("1423213500101","ESPRIT焦糖松露造型可可球250g","ESPRIT",199.0),("1423037400101","Tonys Chocolonely牛軋糖牛奶巧180g","Tony’s Chocolonely",179.0),("1423207800101","金莎三粒裝37.5g (16入)","費列羅",537.0),("1423016200101","好時牛奶巧克力片裝100g","好時Hershey's",66.0),("1423000600101","凱薩榛果夾心牛奶巧克力","CACHET凱薩",128.0),("1423205000101","杜拜Chocodate椰棗杏仁果牛奶巧克力","Chocodate",109.0),("1423027600101","瑞士蓮Lindor 夾餡綜合巧克力(16入) 200g","瑞士蓮",199.0),("1423066800101","GDV迷你黑巧克力棒-杏仁","GODIVA",129.0),("1423048400101","GDV迷你黑巧克力棒-海鹽","GODIVA",129.0),("1423207100101","費列羅臻品甜點24粒盒裝259.2g","費列羅",299.0),("1423031200101","名糖草莓奶油風味可可製品","Meito名糖",169.0),("1423012000101","瑞士蓮極醇系列-海鹽黑巧克力100g","瑞士蓮",149.0),("1423212800101","明治CACAO 72％夏威夷豆黑巧克力63g","明治",89.0),("1423069500101","歐維氏杏仁牛奶巧克力球192g","77",129.0),("1423317800101","瑞士蓮Lindor 榛果夾餡牛奶巧克力 200g","瑞士蓮",199.0),("1423220000101","明治夏威夷豆可可粒(盒裝)64g","明治食品",68.0),("1423047500101","Milka 草莓夾心巧克力 100g","Milka",66.0),("1423027800101","Whittakers莓果夾餡牛奶巧克力-分享包","Whittaker's",199.0),("1423016000101","凱薩櫻桃夾心醇黑巧克力","CACHET凱薩",128.0),("1423301300101","家樂福精選可可碎粒特黑巧克力","家樂福",59.0),("1423025900101","瑞士蓮極醇系列-香橙黑巧克力100g","瑞士蓮",149.0),("1423316600101","凱薩70％巧克力100g","凱薩",128.0),("1423200200101","【限量】金莎金鑽盒裝T24-300g","費列羅",299.0),("1423306100101","家樂福精選特黑巧克力80%","家樂福",59.0),("1423103600101","健達繽紛樂(白)3入裝","健達",86.0),("1423054100101","義大利Witors焦糖海鹽可可製品","Witor's",149.0),("1423009900101","Hershey'S Nuggets牛奶巧克力包","Hershey'S",209.0),("1423033300101","歐維氏85%&100%醇黑綜合巧克力","77",265.0),("1423009800101","Milka 氣泡感牛奶巧克力","Milka",66.0),("1423213400101","ESPRIT可麗脆餅松露造型可可球250g","ESPRIT",199.0),("1423058700101","Ferrero 黃金時刻牛奶可可製品 90g","null",199.0),("1423006600101"," KitKat威化巧克力(濃黑巧克力)","KitKat",119.0),("1423050000101","好時金磚杏仁夾餡牛奶巧克力(分享包)","Hershey's好時",99.0),("1423045800101","Milka OREO三明治餅乾牛奶巧克力 92g","Milka",66.0),("1423026100101","Hershey's Kisses水滴巧酥白巧克力82g","Hershey'S",76.0),("1423212700101","明治CACAO 72％杏仁黑巧克力81g","明治",79.0),("1423300600101","歐維氏85％醇黑巧克力 77g","77",49.0),("1423027400101","Cona's草莓薄片夾心巧克力","Cona's",269.0),("1423051900101","義大利Caffarel 榛果夾餡可可製品 165g","Caffarel",229.0),("1423002900101","Hershey'S綜合迷你巧克力10.4oz(294g)","Hershey'S",209.0),("1423220400101","Hersheys 杏仁太妃糖牛奶可可製品","Hershey's",209.0),("1423004200101","MMS迷你糖衣巧克力五入裝","M&M's",179.0),("1423020100101","瑞士蓮經典榛果牛奶巧克力片","瑞士蓮",149.0),("1423018800101","好時曲奇餅乾夾餡49%黑巧克力-咖啡口味","好時Hershey's",125.0),("1423301400101","77歐維氏醇黑綜合巧克力165g","77",129.0),("1423316400101","凱薩85％巧克力100g","凱薩",128.0),("1423037500101","Tonys Chocolonely焦糖海鹽牛奶巧克力180g","Tony’s Chocolonely",179.0),("1423013900101","OREO 夾心巧克力蛋 155g","OREO",129.0),("1423300700101","瑞士蓮 極醇系列-100%黑巧克力片 50g","瑞士蓮",179.0),("1423009400101","Milka OREO夾心白巧克力 100g","Milka",66.0),("1423309100101","瑞士蓮 極醇系列-70％巧克力片 100g","瑞士蓮",151.0),("1423002000101","費列羅臻品甜點15粒盒裝162g","費列羅",205.0),("1423213200101","ESPRIT可可脆片松露造型可可球250g","ESPRIT",199.0),("1423067000101","GODIVA迷你黑巧克力棒90%","GODIVA",129.0),("1423200300101","杜拜Chocodate椰棗杏仁果特黑巧克力","Chocodate",109.0),("1423036900101","Reeses 花生醬夾餡牛奶巧克力(片裝) 120g","Reese's",105.0),("1423316700101","凱薩64％秘魯可可豆醇黑巧克力100g","凱薩",128.0),("1423028800101","Hershey'S Kisses牛奶巧克力12oz","Hershey'S",209.0),("1423027200101","凱薩杏仁西洋梨夾心醇黑巧克力","CACHET凱薩",128.0),("1423006200101","甘百世珍珠奶茶巧克力糖(盒裝)70g","甘百世",55.0),("1423026600101","明治可可製品-牛奶口味(片裝)40g","明治",37.0),("1423061100101","比利時經典貝殼巧克力禮盒 250g","The Belgian",269.0),("1423304100101","LOTTE 72%可可製品盒裝","LOTTE",59.0),("1423207300101","杜拜Chocodate椰棗杏仁果椰子巧克力","Chocodate",109.0),("1423312300101","Lotte Ghana 加納代可可脂黑巧克力片裝","LOTTE",38.0),("1423016500101","好時巧酥可可風味球","Hershey's好時",40.0),("1423014000101","義大利Witors櫻桃可可製品","Witor's",149.0),("1423102500101","瑞士三角牛奶巧克力","TOBLERONE",62.0),("1423310800101","甘百世72％黑巧克力(盒裝）80g","甘百世",56.0),("1423302600101","明治86%CACAO巧克力-70g","明治",77.0),("1423051500101","義大利Witors開心果可可製品","Witor's",149.0),("1423115500101","好時曲奇餅乾夾餡49黑巧克力-榛果口味","Hershey's好時",39.0),("1423011500101","Kitkat全麥味威化餅","Kitkat",119.0),("1423032900101","Whittakers薄荷黑巧克力-分享包","Whittaker's",199.0),("1423113700101","士力架花生巧克力五入裝","士力架",139.0),("1423300200101","瑞士蓮 經典薄片黑巧克力125g克","瑞士蓮",289.0),("1423021600101","明治草莓夾餡可可製品26枚盒裝120g克 x 1BOX盒","明治",99.0),("1423316300101","凱薩90％巧克力100g","凱薩",128.0),("1423023500101","Kisses 巧酥可可風味水滴36g克","Kisses",39.0),("1423033400101","歐維氏96醇黑巧克力77g","null",75.0),("1423039400101","Whittakers 牛奶巧克力分享包 180g","Whittaker's",199.0),("1423024200101","露特 海鹽巧克力","露特",189.0),("1423061200101","海馬可可夾心牛奶巧克力 135g","null",139.0),("1423220600101","比利時榛果脆餅夾心牛奶巧克力","The Belgian",95.0),("1423047900101","義大利Witors檸檬酒可可製品","Witor's",149.0),("1423206500101","杜拜Chocodate椰棗杏仁果黑巧克力","Chocodate",109.0),("1423001700101","健達奇趣蛋藍色版3蛋裝","健達",98.0),("1423044500101","樂家薄片巧克力杏仁糖-牛奶巧克力","樂家",199.0),("1423016800101","好時巧酥可可風味片100g","好時Hershey's",66.0),("1423300100101","瑞士蓮經典薄片牛奶巧克力125g","瑞士蓮",289.0),("1423028400101","凱薩鹽烤玉米夾心牛奶巧克力","CACHET凱薩",128.0),("1423014500101","好時曲奇餅乾夾餡黑巧克力球-鹽味焦糖口味","Hershey's好時",40.0),("1423312500101","歐維氏90屏東可可極致黑巧克力","77",139.0),("1423114300101","Conas妮娜-搖滾系跳跳糖檸檬巧克力條","Cona's妮娜",229.0),("1423061800101","老楊白巧克力方塊酥","老楊",208.0),("1423315600101","Original可可協奏86%黑巧克力","Original可可協奏",89.0),("1423056800101","Baileys 焦糖海鹽可可製品 90g","Bailey's",89.0),("1423057100101","Baileys 奶酒可可製品 205g","Bailey's",259.0),("1423220500101","海馬榛果夾心巧克力 135g","The Belgian",139.0),("1423027300101","瑞士蓮Lindor 夾餡牛奶巧克力(16入) 200g","瑞士蓮",199.0),("1423313900102","家樂福白巧克力-100gx2","家樂福",99.0),("1423107400101","Hershey'S 好時金磚巧酥夾餡白巧克力28g","Hershey'S",33.0),("1423037600101","Tonys Chocolonely牛奶巧克力180g(片裝)","Tony’s Chocolonely",179.0),("1423302100101","家樂福甜點烘焙用巧克力64%-200g","家樂福",79.0),("1423057900101","露特 草莓黑巧克力 80g","露特",189.0),("1423303300101","明治牛奶巧克力","明治",37.0),("1423316800101","明治CACAO 95%黑巧克力(盒裝)","明治",77.0),("1423055400101","GODIVA條裝臻粹榛子巧克力3顆裝","GODIVA",79.0),("1423014300101","Reeses 花生醬夾餡迷你杯子牛奶巧克力(袋裝) 90g","Reeses",85.0),("1423034200101","瑞士蓮極醇系列草莓夾餡黑巧克力片","瑞士蓮",149.0),("1423018400101","Kisses 可可慕斯口味夾餡牛奶巧克力 36g","Kisses",49.0),("1423018600101","Hershey's好時 Drops杏仁夾餡牛奶巧克力 60g","好時Hershey's",88.0),("1423008300101","力特律動可可製品(草莓優格味)","null",116.0),("1423309500101","韓國樂天骰子巧克力56%","LOTTE",79.0),("1423014600101","麥提莎麥芽脆心巧克力90g","null",89.0),("1423307700101","家樂福精選牛奶巧克力","家樂福",59.0),("1423220800101","明治白絲絨杏仁牛奶可可球59g","明治食品",109.0),("1423220100101","Milka MMMax 榛果牛奶巧克力","Milka",149.0),("1423004900101","明治黑可可製品(片裝)50g","明治",37.0),("1423057600101","露特櫻桃巧克力","露特",189.0),("1423053000101","義大利Caffarel 榛果脆粒黑巧克力","Caffarel",229.0),("1423302900101","明治CACAO 86%黑巧克力26枚盒裝130g","明治",123.0),("1423313700101","Trapa 無添加糖80％黑巧克力片 80g","Trapa",89.0),("1423306600101","多樂草莓醇黑巧克力","多樂TORRAS",108.0),("1423045200101","樂家薄片巧克力杏仁糖-高可可","樂家",199.0),("1423316500101","瓦維爾90%黑巧克力","瓦維爾",99.0),("1423029700101","Whittakers脆片夾餡牛奶巧克力-分享包","Whittaker's",199.0),("1423055300101","GODIVA條裝臻粹雙重巧克力(含餡)3顆裝","GODIVA",79.0),("1423314300101","露特經典85%黑巧克力(台灣限定) 90g","露特",189.0),("1423062200101","老楊黑巧克力方塊酥","老楊",208.0),("1423202100101","Hershey'S Nug杏仁黑巧克力包","Hershey'S",209.0),("1423013500101","義大利Witors黑可可製品","Witor's",149.0),("1423305400101","明治 黑可可製品26枚盒裝 120g","明治",99.0),("1423006700101","韓國Sweetory杏仁可可球","韓國Sweetory",42.0),("1423030200101","Brookside巴西莓夾餡黑巧克力198g","Brookside",165.0),("1423013100101","Milka MMMax OREO 餅乾夾心牛奶巧克力","Milka",149.0),("1423032100101","KitKat 蓮花脆餅巧克力","Kitkat",119.0),("1423051600101","義大利Witors脆粒牛奶可可製品","Witor's",149.0),("1423209600101","Hershey'S Kiss杏仁牛奶巧283g","Hershey'S",209.0),("1423205600101","Hershey'S Nug杏仁牛奶巧克力包","Hershey'S",209.0),("1423011800101","阿尼驚喜蛋-波力救援小英雄60g","阿尼驚喜蛋",119.0),("1423033900101","歐維氏100%醇黑巧克力77g","77",100.0),("1423208900101","明治可可72％黑巧克力(盒裝)","明治",77.0),("1423017100101","Whittakers跳跳糖牛奶巧克力-分享包","Whittaker's",199.0),("1423204200101","力特律動可可製品(榛果仁)","null",122.0),("1423315700101","Original可可協奏95%黑巧克力","Original可可協奏",89.0),("1423027000101","瑞士蓮經典純味榛果巧克力片","瑞士蓮",149.0),("1423315400101","義大利Caffarel 86%黑巧克力片 80g","Caffarel",149.0),("1423207600101","金莎T8心型盒裝100g","費列羅",139.0),("1423303600101","77 巧克力風味磚(黑)400g","77",115.0),("1423220700101","明治白絲絨夏威夷豆牛奶可可粒63g","明治食品",109.0),("1423032700101","義大利萊卡Laica綜合酒心巧克力書造型104g","義大利萊卡",119.0),("1423308700101","Cona's 95%黑巧克力薄片","Cona's",179.0),("1423307100101","瑞士蓮 極醇系列-90％巧克力片 100g","瑞士蓮",151.0),("1423300300101","瑞士蓮 極醇系列-99％巧克力片 50g","瑞士蓮",179.0),("1423061000101","ZAINI GIANDUIOTTI 金裝巧克力禮盒200g","Zaini",458.0),("1423059200101","Ferrero 黃金時刻黑可可製品 90g","null",199.0),("1423014400101","義大利Witors經典綜合可可製品","Witor's",149.0),("1423316000101","瓦維爾100%純黑巧克力","瓦維爾",99.0),("1423201000101","Baci 牛奶巧克力125g克","Baci",269.0),("1423025600101","Hershey's Kisses水滴牛奶巧克力82g","Hershey'S",76.0),("1423008900101","阿尼驚喜蛋-米奇米妮","阿尼Zaini",119.0),("1423011200101","義大利Witors榛果脆米可可製品","Witor's",149.0),("1423054900101","TOTO 巧克力驚喜盒*隨機出貨不挑款，以實際出貨為準。","TOTO",138.0),("1423060900101","ZAINI BOULE DOR 金裝巧克力禮盒115g","Zaini",368.0),("1423012300101","SNOOPY聖誕倒數月曆50G","SNOOPY",149.0),("1423022100101","瑞士蓮Lindor 夾餡綜合巧克力(14入) 168g","瑞士蓮",199.0),("1423062700101","LOTTE Crunky脆心可可製品BTS聯名限定版","LOTTE",39.0),("1423221500101","Ferrero Rondnoir 可可製品14入盒裝","null",329.0),("1423022600101","Reeses 花生醬夾餡杯子牛奶巧克力(分享包) 297g","Reeses",219.0),("1423304800101","比利時酷比特貝殼巧克力禮盒250g","null",257.0),("1423217600101","Conas妮娜-跳跳糖草莓乾巧克力","Cona's",329.0),("1423051700101","迷你樂家黑巧克力杏仁糖","樂家",159.0),("1423107500101","Hershey'S 好時金磚杏仁黑巧克力28g","Hershey'S",33.0),("1423315800101","LOTTE ZERO可可製品(70)","LOTTE",69.0),("1423049300101","Vergani MILANO卡布奇諾可可製品鐵盒","Vergani MILANO",299.0),("1423001200101","瑞士蓮極醇系列香橙夾餡黑巧克力","瑞士蓮",179.0),("1423303800101","Galler 比利時85%醇黑巧克力","Galler",109.0),("1423021900101","瑞士蓮Lindor 夾餡牛奶巧克力(14入) 168g","瑞士蓮",199.0),("1423021800101","義大利Novi檸檬碎片巧克力片70","Novi",49.0),("1423213100101","ESPRIT原味松露造型可可球250g","ESPRIT",199.0),("1423012200101","阿尼驚喜蛋-TAYO小巴士60g克","阿尼Zaini",119.0),("1423036600101","阿尼驚喜蛋-汽車總動員60g","null",119.0),("1423028700101","ROUGE杏仁牛奶可可製品","ROUGE",239.0),("1423027700101","ROUGE花生白可可製品","ROUGE",239.0),("1423028600101","ROUGE無花果可可製品","ROUGE",239.0),("1423314500101","歐維氏90％醇黑巧克力91g","77",93.0),("1423028100101","ROUGE杏仁黑可可製品","ROUGE",239.0),("1423006300101","Hershey'S Kiss牛奶白巧克力錐300g","Hershey'S",268.0),("1423040700101","NIEDEREGGER 工藝禮讚 182g","null",450.0),("1423303500101","多樂牛奶巧克力","多樂TORRAS",108.0),("1423003500101","好時曲奇餅乾夾餡49%黑巧克力-鹽味焦糖","好時Hershey's",125.0),("1423017300101","好時巧酥可可風味金磚三入組","好時Hershey's",98.0),("1423062500101","LOTTE Ghana加納可可製品(燕麥奶)","LOTTE",99.0),("1423027500101","Brookside紅石榴夾餡黑巧克力198g","Brookside",165.0),("1423026900101","阿尼驚喜蛋-湯瑪士小火車60g","null",119.0),("1423013800101","Milka 花生焦糖夾心牛奶巧克力90g","Milka",83.0),("1423039900101","汪汪隊耶誕月曆牛奶巧克力 75g","null",145.0),("1423034100101","汽車造型牛奶巧克力網袋 100g【Mia C'bon Only】","null",79.0),("1423029100101","Cona's醇濃薄片夾心巧克力","Cona's",269.0),("1423005500101","阿尼驚喜蛋-馬達加斯加","阿尼Zaini",119.0),("1423210500101","巧克力戀人-杏仁果黑巧克力150g","null",199.0),("1423062900101","露特 玫瑰巧克力 100g","露特",189.0),("1423049800101","AnthonBerg貝禮詩 奶酒風味夾心巧克力(14入) 219g","null",435.0),("1423012700101","Milka 乳牛斑斑牛奶巧克力100g","Milka",83.0),("1423048700101","義大利Caffarel 榛果可可製品 165g","Caffarel",229.0),("1423059000101","Guinness 焦糖可可製品90g","Guinness",89.0),("1423064900101","AnthonBerg人頭馬 干邑白蘭地巧克力(12入) 187g","null",429.0),("1423052300101","AnthonBerg 摩登雞尾酒巧克力(12入) 187g","null",429.0),("1423051400101","Vergani ROMA提拉米蘇可可製品鐵盒","Vergani MILANO",299.0),("1423063000101","瓦維爾薄荷太妃70%黑巧克力","瓦維爾",99.0),("1423022200101","北海道霜淇淋風味可可製品","null",169.0),("1423021200101","白色DARS(麝香葡萄)白巧克力","DARS",69.0),("1423033500101","不二家 Look綜合可可萬聖版 131.6g【Mia C'bon Only】","null",149.0),("1423201200101","Conas妮娜-鐵觀音茶巧克力夏威夷果","Cona's妮娜",329.0),("1423040800101","塔雅思東方綜合口味可可製品(蘋果造型盒)","塔雅思",299.0),("1423063500101","露特 開心果巧克力 100g","露特",189.0),("1423005400101","阿尼驚喜蛋-功夫熊貓60g","Zaini",119.0),("1423065500101","瓦尼尼 藍玫瑰榛果牛奶夾心巧克力 120g","null",199.0),("1423065800101","瓦尼尼 藍玫瑰焦糖夾心巧克力 120g","null",199.0),("1423031900101","Galler覆盆莓白巧克力","Galler",109.0),("1423316100101","瓦維爾70%黑巧克力","瓦維爾",99.0),("1423051000101","AnthonBerg 經典烈酒巧克力(12入) 187g","null",429.0),("1423304000101","Disney100系列-72%黑巧克力","Disney",59.0),("1423035300101","海太香菇造型DIY巧克力風味餅乾*商品包裝隨機出貨不挑款，以實際出貨為準。","海太",99.0),("1423216800101","榛果巴芮脆片黑鑽","櫻桃爺爺",280.0),("1423204900101","LOTTE夏威夷果仁可可球","LOTTE",99.0),("1423022500101","不二家 Look美式Diner棉花糖可可 38g【Mia C'bon Only】","null",85.0),("1423019200101","杜拜Chocodate椰棗杏仁果焦糖巧克力","Chocodate",109.0),("1423206900101","白巧克力戀人杏仁巧克力150g","null",199.0),("1423301800101","Terravita 77 純黑巧克力片","null",89.0),("1423056200101","露特 蔓越莓巧克力 120g","露特",189.0),("1423310000101","露特 經典85%黑巧克力 90g","露特",189.0),("1423016700101","Kisses 草莓慕斯口味夾餡牛奶巧克力 36g","Kisses",49.0),("1423066000101","歐維氏絲滑牛奶脆心巧克力 90g","77",75.0),("1423028900101","Cona's鹽味焦糖薄片夾心巧克力","Cona's",269.0),("1423201100101","Conas妮娜-香檳榛果巧克力","Cona's妮娜",329.0),("1423114400101","Conas妮娜-搖滾系跳跳糖草莓巧克力條","Cona's妮娜",229.0),("1423315900101","伽樂Galler70%醇黑巧克力80g","伽樂Galler",109.0),("1423208200101","LOTTE Almond脆心杏仁可可球","LOTTE",99.0),("1423037000101","歐洲假期綜合夾心巧克力書本造型112g","歐洲假期",119.0),("1423311500101","義大利Caffarel 75%黑巧克力片 80g","Caffarel",149.0),("1423058000101","露特草莓藍莓白巧克力","露特",189.0),("1423024000101","阿尼驚喜蛋60g克","阿尼驚喜蛋",119.0),("1423216700101","夏威夷豆蔓越莓黑鑽","櫻桃爺爺",280.0),("1423065600101","瓦尼尼 藍玫瑰開心果夾心巧克力 120g","null",199.0),("2011001200101","可可棒(存錢桶裝)雙眼※若賣場無雙眼款式將換單眼出貨，恕無法指定款式","null",169.0),("1423062600101","LOTTE Ghana加納可可製品(減糖30)","LOTTE",99.0),("1423068800101","義大利萊卡85％可可夾心巧克力書本造型112g","義大利萊卡",119.0),("1423024100101","露特 杏仁果巧克力 (紅寶石系列)","露特",240.0),("1423200100101","Disney100系列-杏仁巧克力","Disney",59.0),("1423200800101","Disney100系列-榛果巧克力","Disney",59.0),("1423052400101","Vergani NAPOLI檸檬酒可可製品鐵盒","Vergani NAPOLI",299.0),("1423048900101","Vergani VENEZIA牛軋糖榛果可可製品鐵盒","Vergani VENEZIA",299.0),("1423066200101","比利時牛奶巧克力","The Belgian",95.0),("1423065700101","瓦尼尼 藍玫瑰72%醇黑榛果夾心巧克力 120g","null",199.0),("1423001800101","比利時玫瑰鹽黑巧克力","The Belgian",95.0),("1423301000101","多樂85%醇黑巧克力","多樂TORRAS",148.0),("1423031700101","阿尼驚喜蛋-蜘蛛人60g","null",119.0),("1423042400101","阿尼驚喜蛋-驚喜迪士尼60g","null",119.0),("1423016400101","好時金磚杏仁夾餡黑巧克力三入組","好時Hershey's",98.0),("1423014200101","阿尼驚喜蛋-馴龍高手-60g","Zaini",119.0),("1423026200101","不二家 鉛筆可可 27g","不二家",60.0),("1423032500101","力特律動可可製品(蘭姆味葡萄乾榛果)","null",116.0),("1423038300101","歐洲假期綜合巧克力蛋320g","歐洲假期",230.0),("1423309200101","瑞士蓮 極醇系列-85％巧克力片 100g","null",151.0),("1423057800101","Mieszko美仕格 伏特加酒心巧克力 180g","null",139.0),("1423064000101","GODIVA 臻粹雙重巧克力(6顆) 60g","null",139.0),("1423306800101","多樂芒果醇黑巧克力","多樂TORRAS",108.0),("1423000800101","Kisses草莓慕斯口味夾餡牛奶巧克力(盒裝)","Kisses",229.0),("1423020800101","白色DARS(草莓香)白巧克力","DARS",69.0),("1423309800101","Cona's 85%黑巧克力薄片","Cona's",179.0),("1423058800101","露特辣椒黑巧克力","露特",189.0),("1423065400101","露特 燈籠果巧克力 120g","露特",189.0),("1423057700101","露特 經典蔓越莓巧克力 100g","露特",189.0),("1423219200101","Cona's妮娜 紅烏龍茶榛果巧克力","Cona's妮娜",329.0),("1423217300101","Cona's鳳梨黃金葡萄乾巧克力","Cona's",329.0),("1423217100101","Cona's百香果文山包種茶杏仁巧克力","Cona's",329.0),("1423217400101","Cona's紅玉茶巧克力夏威夷果","Cona's",329.0),("1423015200101","Conas妮娜-紅玉茶薄片夾心巧克力","Cona's妮娜",269.0),("1423207000101","LOTTE Almond烘焙杏仁可可球","LOTTE",99.0),("1423202500101","費列羅臻品甜點3粒裝32.4g","費列羅",36.0),("1423007000101","77大波露(3入) 120g","null",42.0),("1423314000101","義大利Caffarel 90%黑巧克力片","Caffarel",149.0),("1423013400101","有樂萬聖節版可可味迷你雷神餅乾","有樂製菓",129.0),("1423052900101","迷你樂家牛奶巧克力杏仁糖","樂家",159.0),("1423025500101","Whittakers杏仁夾餡牛奶巧克力-分享包","Whittaker's",199.0),("1423220300101","Cadbury 牛奶巧克力含葡萄乾和堅果","Cadbury",119.0)

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `books`
--
/* ALTER TABLE `books`
--   ADD PRIMARY KEY (`bookid`);*/

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
