USE db_pdamsys;
CREATE TABLE IF NOT EXISTS pelanggan_reg(
	ID int not null auto_increment primary key,
	no_ktp varchar(50),
	nama_1 varchar(100) not null,
	alamat_1 varchar(500) not null,
	rt_1 varchar(5),
	rw_1 varchar(5),
	kecamatan_1 varchar(100) not null,
	kelurahan_1 varchar(100) not null,
	nama_2 varchar(100) not null,
	alamat_2 varchar(500) not null,
	rt_2 varchar(5),
	rw_2 varchar(5),
	kecamatan_2 varchar(100) not null,
	kelurahan_2 varchar(100) not null,
	no_spl varchar(50),
	upp varchar(50),
	no_hp varchar(50),
	pekerjaan varchar(100),
	pos_lat varchar(100),
	po_lon varchar(100),
	luas tinyint not null default 0,
	jns_bangunan varchar(100),
	jml_penghuni int not null default 1,
	stat_rmh varchar(100),
	peruntukan varchar(100),
	sumber_air varchar(100)
)engine=myisam;


CREATE TABLE IF NOT EXISTS `upp` (
  `cabang` char(2) NOT NULL,
  `NAMA` varchar(20) DEFAULT NULL,
  `KACAB` varchar(25) DEFAULT NULL,
  `NIP` varchar(20) DEFAULT NULL,
  `IP` varchar(50) NOT NULL DEFAULT '-',
  `code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`cabang`)
) ENGINE=MyISAM;
