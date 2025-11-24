<?php
#==================================================================================================
# Muatkan tatarajah
#==================================================================================================
#--------------------------------------------------------------------------------------------------
	# define pembolehubah global
	define('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']) . '/');
	define('SERVER', 'http://' . $_SERVER['SERVER_NAME'] . '/');
	define('SERVER443', 'https://' . $_SERVER['SERVER_NAME'] . '/');
	# Tetapkan zon waktu lalai kepada zon waktu tempatan anda
	//date_default_timezone_set('Asia/Kuala_Lumpur');
#--------------------------------------------------------------------------------------------------
function bujang_tatarajah()
{
	static $t = null;

	if ($t === null) {
		$t = include __DIR__ . '/tatarajah.php';
	}

	return $t;
}
#--------------------------------------------------------------------------------------------------
#==================================================================================================
# Debug
#==================================================================================================
#--------------------------------------------------------------------------------------------------
function bujang_dump($data, $label = 'data')
{
	if (bujang_tatarajah()['debug']) {
		echo "<pre><strong>$label:</strong> ";
		print_r($data);
		echo "</pre>";
	}
}
#--------------------------------------------------------------------------------------------------
#==================================================================================================
# Dapatkan segmen URL
#==================================================================================================
#--------------------------------------------------------------------------------------------------
function bujang_segmen()
{
	$url = $_SERVER['REQUEST_URI'] ?? '/';
	$url = trim($url, '/');

	return ($url === '' ? [] : explode('/', $url));
}
#--------------------------------------------------------------------------------------------------
#==================================================================================================
# Fungsi carian fail (daripada kod asal anda)
#==================================================================================================
#--------------------------------------------------------------------------------------------------
# lisfile2 - mula
function GetMatchingFiles($files, $search)
{
	if($files==false):
		return false;
	else:
		# Split to name and filetype
		if(strpos($search,"."))
		{
			$baseexp = substr($search,0,strpos($search,"."));
			$typeexp = substr($search,strpos($search,".")+1,strlen($search));
		}
		else
		{
			$baseexp = $search;
			$typeexp = "";
		}

		# Escape all regexp Characters
		$baseexp = preg_quote($baseexp);
		$typeexp = preg_quote($typeexp);

		# Allow ? and *
		$baseexp = str_replace(array("\*","\?"), array(".*","."), $baseexp);
		$typeexp = str_replace(array("\*","\?"), array(".*","."), $typeexp);

		# Search for Matches
		$i = 0;
		$matches = null; # $matches adalah array()
		foreach($files as $file)
		{
			$filename = basename($file);

			if(strpos($filename,"."))
			{
				$base = substr($filename,0,strpos($filename,"."));
				$type = substr($filename,strpos($filename,".")+1,strlen($filename));
			}
			else
			{
				$base = $filename;
				$type = "";
			}

			if(preg_match("/^".$baseexp."$/i",$base) && preg_match("/^".$typeexp."$/i",$type))
			{
				$matches[$i]=$file;
				$i++;
			}
		}

		return $matches;
	endif;
}
#------------------------------------------------------------------------------------------
# Returns all Files contained in given dir, including subdirs
function GetContents($dir,$files=array())
{
	if(!($res=opendir($dir))): exit("folder $dir tidak wujud!!!");
	else:
		while(($file=readdir($res))==TRUE)
		if($file!="." && $file!="..")
			if(is_dir("$dir/$file"))
				$files=GetContents("$dir/$file",$files);
			else array_push($files,"$dir/$file");

		closedir($res);
		return $files;
	endif;
}
# listfile2 - tamat
#--------------------------------------------------------------------------------------------------
#==================================================================================================
# Tentukan fail yang hendak dimuatkan
#==================================================================================================
#--------------------------------------------------------------------------------------------------
function bujang_tentukan_fail($seg)
{
	$t = bujang_tatarajah();
	$folder = __DIR__ . '/mencari/';

	# Jika tiada segmen → halaman utama
	if (empty($seg)) {
		return $folder . $t['halaman_utama'] . '.php';
	}

	# Cari fail melalui fungsi GetMatchingFiles
	$semuaFail = GetContents($folder);
	$nama = implode('/', $seg); // contoh: khidmat/pengaturcaraan
	$cari = GetMatchingFiles($semuaFail, $nama . '.php');

	if (!empty($cari)) {
		return $cari[0];
	}

	# Jika tidak ditemui -> 404
	return $folder . $t['halaman_404'] . '.php';
}
#--------------------------------------------------------------------------------------------------
#==================================================================================================
# Papar halaman
#==================================================================================================
# mula css
#--------------------------------------------------------------------------------------------------
function senaraiCssDaa($pilih = 0)
{
	$papar[] = array(
		'https://use.fontawesome.com/releases/v5.11.2/css/all.css',
		//'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
		'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
	);
	$papar[] = array(
		//'https://use.fontawesome.com/releases/v5.11.2/css/all.css',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
		//'https://cdn.jsdelivr.net/npm/github-markdown-css@5.8.1/github-markdown.min.css',
		//'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css',
		//'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
	);

	return $papar[$pilih];
}
#--------------------------------------------------------------------------------------------------
function listJSDaa($pilih = 'B')
{
	$pA[] = 'https://code.jquery.com/jquery-3.3.1.slim.min.js';
	$pA[] = 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js';
	$pA[] = 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js';
	//$pA[] = 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js';
	//$pB[] = 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js';
	$pB[] = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js';
	$pB[] = 'https://cdnjs.cloudflare.com/ajax/libs/markdown-it/13.0.1/markdown-it.min.js';
	
	# pilih tatasusunan
	$p = ($pilih === 'B') ? $pB : $pA;

	return $p;
}
#--------------------------------------------------------------------------------------------------
function ulangCssDaa($listCss)
{
	$style = null;
	if (isset($listCss) && $listCss != null)
	{
		foreach ($listCss as $css)
		{
			$style .= "\n" . '<link rel="stylesheet" type="text/css" href="' . $css . '">';
		}
	}

	return $style;
}
#--------------------------------------------------------------------------------------------------
function metaListDaa()
{
	$k01 = 'width=device-width, initial-scale=1,';
	$p[] = '<meta charset="utf-8">';
	$p[] = '<meta name="viewport" content="' . $k01 . ' shrink-to-fit=no">';
	//$p[] = '<meta name="viewport" content="' . $k01 . ' maximum-scale=1">';
	$p[] = '<meta name="description" content="">';
	//$p[] = '<meta name="keywords" content="derma,Crownfunding,">';
	$p[] = '<meta name="author" content="Amin007">';
	//$p[] = '';
	return $p;
}
#--------------------------------------------------------------------------------------------------
function ulangMetaDaa($listMeta)
{
	$p = null;
	if (isset($listMeta) && $listMeta != null)
	{
		foreach ($listMeta as $meta)
		{
			$p .= "\n" . $meta;
		}
	}

	return $p;
}
#--------------------------------------------------------------------------------------------------
function diatasMudah($title = 'List Folder')
{
	print <<<END
<!doctype html>
<html lang="en">
<head>
<title>$title</title>
</head>
<body>

END;
}
#--------------------------------------------------------------------------------------------------
function diatasdaa($title = 'List Folder')
{
	$meta = ulangMetaDaa(metaListDaa());
	$style = ulangCssDaa(senaraiCssDaa(1));
	print <<<END
<!doctype html>
<html lang="en">
<head>$meta
<title>$title</title>$style

</head>
<body>

END;
}
#--------------------------------------------------------------------------------------------------
function diatasTableExcel($title = 'List Folder')
{
	$meta = ulangMetaDaa(metaListDaa());
	$style = ulangCssDaa(senaraiCssDaa(1));
	print <<<END
<!doctype html>
<html lang="en">
<head>$meta
<title>$title</title>$style

<style type="text/css">
table.excel
{
	border-style:ridge;
	border-width:1;
	border-collapse:collapse;
	font-family:sans-serif;
	font-size:11px;
}
table.excel thead th, table.excel tbody th
{
	background:#cccccc;
	border-style:ridge;
	border-width:1;
	text-align: center;
	vertical-align: top;
}
table.excel tbody th { text-align:center; vertical-align: top; }
table.excel tbody td { vertical-align:bottom; }
table.excel tbody td
{
	padding: 0 3px; border: 1px solid #aaaaaa;
	background:#ffffff;
}
</style>
</head>
<body>

END;
#
}
#--------------------------------------------------------------------------------------------------
# tamat css
# mula js
#--------------------------------------------------------------------------------------------------
function dibawahDaa()
{
	$jsDaa = ulangJSDaa(listJSDaa());
	print <<<END

<!-- khas untuk jquery dan js2 lain
=============================================================================================== -->
$jsDaa
END;
}
#--------------------------------------------------------------------------------------------------
function dibawahkaki()
{
	$jsDaa = ulangJS(listJS());
	print <<<END

<!-- Footer
=============================================================================================== -->
<!-- footer class="footer">
	<div class="container">
		<span class="label label-info">
		&copy; Hak Cipta Terperihara 2025. Theme Asal Bootstrap Twitter
		</span>
	</div>
</footer -->

<!-- khas untuk jquery dan js2 lain
=============================================================================================== -->
$jsDaa
END;
}
#--------------------------------------------------------------------------------------------------
function ulangJSDaa($listJS)
{
	$p = null;
	if (isset($listJS) && $listJS != null)
	{
		foreach ($listJS as $js)
		{
			$p .= '<script type="text/javascript" src="' . $js . '"></script>' . "\n";
		}
	}

	return $p;
}
#--------------------------------------------------------------------------------------------------
# tamat js
#--------------------------------------------------------------------------------------------------
function badanKaki()
{
	print <<<END
</body>
</html>
END;
#
}
#--------------------------------------------------------------------------------------------------
function bujang_papar($fail, $data = [])
{
	if (!file_exists($fail)) {
		echo "<h3>Fail halaman tidak ditemui.</h3>";
		return;
	}

	extract($data);
	require $fail;
}
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------