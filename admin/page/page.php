<?php
	$page=isset($_GET['page'])?$_GET['page']:'';
	$page=base64_decode($page);
		switch ($page)
			{	
				case 'artikel_delete':
					include 'artikel_delete.php';
					break;
					
				case 'artikel_view':
					include 'artikel_view.php';
					break;

				case 'artikel_input':
					include 'artikel_input.php';
					break;

				case 'artikel_proses':
					include 'artikel_proses.php';
					break;

				case 'artikel_input_update':
					include 'artikel_input_update.php';
					break;

				case 'artikel_update':
					include 'artikel_update.php';
					break;

				case 'artikel_detail':
					include 'artikel_detail.php';
					break;

				case 'artikel_kategori_input':
					include 'artikel_kategori_input.php';
					break;

				case 'artikel_kategori_proses':
					include 'artikel_kategori_proses.php';
					break;

				case 'artikel_kategori_delete':
					include 'artikel_kategori_delete.php';
					break;


				// ================= PAGE PROFIL===================

				case 'profil_view':
					include 'profil_view.php';
					break;

				case 'profil_input':
					include 'profil_input.php';
					break;

				case 'profil_proses':
					include 'profil_proses.php';
					break;

				case 'profil_input_update':
					include 'profil_input_update.php';
					break;

				case 'profil_update':
					include 'profil_update.php';
					break;

				case 'profil_delete':
					include 'profil_delete.php';
					break;

				// ================= PAGE GALERI===================

				case 'galeri_view':
					include 'galeri_view.php';
					break;

				case 'galeri_input':
					include 'galeri_input.php';
					break;

				case 'galeri_proses':
					include 'galeri_proses.php';
					break;

				case 'galeri_delete':
					include 'galeri_delete.php';
					break;

				case 'galeri_kategori_delete':
					include 'galeri_kategori_delete.php';
					break;

				case 'galeri_kategori_proses':
					include 'galeri_kategori_proses.php';
					break;

				case 'galeri_kategori_input':
					include 'galeri_kategori_input.php';
					break;

				// ============PAGE KOTAK SARAN =============

				case 'kotak_saran_view':
					include 'kotak_saran_view.php';
					break;
					
				case 'kotak_saran_delete':
					include 'kotak_saran_delete.php';
					break;

				// ================= PAGE PROFIL===================

				case 'maps_view':
					include 'maps_view.php';
					break;

				case 'maps_input':
					include 'maps_input.php';
					break;

				case 'maps_proses':
					include 'maps_proses.php';
					break;

				case 'maps_input_update':
					include 'maps_input_update.php';
					break;

				case 'maps_update':
					include 'maps_update.php';
					break;

				case 'maps_delete':
					include 'maps_delete.php';
					break;

				// =============PAGE KOMENTAR ==================

				case 'komentar_delete':
					include 'komentar_delete.php';
					break;

				case 'komentar_view':
					include 'komentar_view.php';
					break;


				// =============PAGE KETERANGAN MAPS ===========

				case 'maps_keterangan_delete':
					include 'maps_keterangan_delete.php';
					break;
					
				case 'maps_keterangan_view':
					include 'maps_keterangan_view.php';
					break;

				case 'maps_keterangan_input':
					include 'maps_keterangan_input.php';
					break;

				case 'maps_keterangan_proses':
					include 'maps_keterangan_proses.php';
					break;

				case 'maps_keterangan_input_update':
					include 'maps_keterangan_input_update.php';
					break;

				case 'maps_keterangan_update':
					include 'maps_keterangan_update.php';
					break;

				case 'maps_keterangan_detail':
					include 'maps_keterangan_detail.php';
					break;

				case 'maps_keterangan_cari1':
					include 'maps_keterangan_cari1.php';
					break;

				case 'maps_keterangan_cari2':
					include 'maps_keterangan_cari2.php';
					break;

				case 'maps_keterangan_cari3':
					include 'maps_keterangan_cari3.php';
					break;

				// =============PAGE SEMBAKO ===========

				case 'sembako_delete':
					include 'sembako_delete.php';
					break;
					
				case 'sembako_view':
					include 'sembako_view.php';
					break;

				case 'sembako_input':
					include 'sembako_input.php';
					break;

				case 'sembako_proses':
					include 'sembako_proses.php';
					break;

				case 'sembako_input_update':
					include 'sembako_input_update.php';
					break;

				case 'sembako_update':
					include 'sembako_update.php';
					break;

				// =============PAGE KETERANGAn ===========

				case 'keterangan_delete':
					include 'keterangan_delete.php';
					break;
					
				case 'keterangan_view':
					include 'keterangan_view.php';
					break;

				case 'keterangan_input':
					include 'keterangan_input.php';
					break;

				case 'keterangan_proses':
					include 'keterangan_proses.php';
					break;

				case 'keterangan_input_update':
					include 'keterangan_input_update.php';
					break;

				case 'keterangan_update':
					include 'keterangan_update.php';
					break;


				// ==============PAGE DEFAULT====================

				default : include'+home_default.php';

			}
?>