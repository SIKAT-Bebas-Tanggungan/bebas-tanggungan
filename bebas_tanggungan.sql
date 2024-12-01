USE [bebas_tanggungan]
GO
/****** Object:  Table [dbo].[admin]    Script Date: 02/12/2024 09:21:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[admin](
	[id_admin] [char](6) NOT NULL,
	[nama] [varchar](50) NOT NULL,
	[username] [varchar](15) NOT NULL,
	[password] [varchar](15) NOT NULL,
	[no_telp] [varchar](20) NOT NULL,
	[role] [varchar](20) NOT NULL,
 CONSTRAINT [PK_admin] PRIMARY KEY CLUSTERED 
(
	[id_admin] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[mahasiswa]    Script Date: 02/12/2024 09:21:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[mahasiswa](
	[id_mahasiswa] [int] IDENTITY(1,1) NOT NULL,
	[nim] [char](10) NOT NULL,
	[nama] [varchar](50) NOT NULL,
	[prodi] [varchar](20) NOT NULL,
	[password] [varchar](15) NOT NULL,
	[angkatan] [int] NOT NULL,
 CONSTRAINT [PK__mahasisw__C7DEC338CD5B3378] PRIMARY KEY CLUSTERED 
(
	[id_mahasiswa] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[notifikasi]    Script Date: 02/12/2024 09:21:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[notifikasi](
	[id_notifikasi] [int] IDENTITY(1,1) NOT NULL,
	[nama] [varchar](20) NOT NULL,
	[isi] [text] NOT NULL,
	[waktu] [datetime] NOT NULL,
	[id_admin] [char](6) NOT NULL,
	[id_mahasiswa] [int] NOT NULL,
 CONSTRAINT [PK_notifikasi] PRIMARY KEY CLUSTERED 
(
	[id_notifikasi] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[status_tanggungan]    Script Date: 02/12/2024 09:21:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[status_tanggungan](
	[id_status] [int] IDENTITY(1,1) NOT NULL,
	[id_mahasiswa] [int] NOT NULL,
	[id_unggah] [int] NOT NULL,
	[id_admin] [char](6) NOT NULL,
	[status] [varchar](15) NOT NULL,
	[tanggal_pengecekan] [date] NOT NULL,
	[status_pengajuan] [varchar](15) NOT NULL,
	[catatan_admin] [varchar](100) NULL,
 CONSTRAINT [PK_status_tanggungan] PRIMARY KEY CLUSTERED 
(
	[id_status] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[unggah_berkas]    Script Date: 02/12/2024 09:21:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[unggah_berkas](
	[id_unggah] [int] IDENTITY(1,1) NOT NULL,
	[laporan] [varbinary](max) NOT NULL,
	[file_tugas] [varbinary](max) NOT NULL,
	[surat_publikasi] [varbinary](max) NOT NULL,
	[tanda_terima_LA] [varbinary](max) NOT NULL,
	[tanda_terima_PKL] [varbinary](max) NOT NULL,
	[scan_toeic] [varbinary](max) NOT NULL,
	[id_mahasiswa] [int] NOT NULL,
 CONSTRAINT [PK_unggah_tanggungan] PRIMARY KEY CLUSTERED 
(
	[id_unggah] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
ALTER TABLE [dbo].[mahasiswa] ADD  CONSTRAINT [DF__mahasiswa__angka__1D7B6025]  DEFAULT ((2024)) FOR [angkatan]
GO
ALTER TABLE [dbo].[notifikasi]  WITH CHECK ADD  CONSTRAINT [FK_notifikasi_mahasiswa] FOREIGN KEY([id_mahasiswa])
REFERENCES [dbo].[mahasiswa] ([id_mahasiswa])
GO
ALTER TABLE [dbo].[notifikasi] CHECK CONSTRAINT [FK_notifikasi_mahasiswa]
GO
ALTER TABLE [dbo].[notifikasi]  WITH CHECK ADD  CONSTRAINT [FK_notifikasi_notifikasi] FOREIGN KEY([id_admin])
REFERENCES [dbo].[admin] ([id_admin])
GO
ALTER TABLE [dbo].[notifikasi] CHECK CONSTRAINT [FK_notifikasi_notifikasi]
GO
ALTER TABLE [dbo].[status_tanggungan]  WITH CHECK ADD  CONSTRAINT [FK_status_tanggungan_admin] FOREIGN KEY([id_admin])
REFERENCES [dbo].[admin] ([id_admin])
GO
ALTER TABLE [dbo].[status_tanggungan] CHECK CONSTRAINT [FK_status_tanggungan_admin]
GO
ALTER TABLE [dbo].[status_tanggungan]  WITH CHECK ADD  CONSTRAINT [FK_status_tanggungan_mahasiswa] FOREIGN KEY([id_mahasiswa])
REFERENCES [dbo].[mahasiswa] ([id_mahasiswa])
GO
ALTER TABLE [dbo].[status_tanggungan] CHECK CONSTRAINT [FK_status_tanggungan_mahasiswa]
GO
ALTER TABLE [dbo].[status_tanggungan]  WITH CHECK ADD  CONSTRAINT [FK_status_tanggungan_unggah_berkas] FOREIGN KEY([id_unggah])
REFERENCES [dbo].[unggah_berkas] ([id_unggah])
GO
ALTER TABLE [dbo].[status_tanggungan] CHECK CONSTRAINT [FK_status_tanggungan_unggah_berkas]
GO
ALTER TABLE [dbo].[unggah_berkas]  WITH CHECK ADD  CONSTRAINT [FK_unggah_berkas_mahasiswa] FOREIGN KEY([id_mahasiswa])
REFERENCES [dbo].[mahasiswa] ([id_mahasiswa])
GO
ALTER TABLE [dbo].[unggah_berkas] CHECK CONSTRAINT [FK_unggah_berkas_mahasiswa]
GO
/****** Object:  StoredProcedure [dbo].[loginAdmin]    Script Date: 02/12/2024 09:21:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[loginAdmin] 
@id_admin char(6),
@username varchar(15),
@password varchar(15)
AS
BEGIN 
IF EXISTS (SELECT * FROM admin WHERE id_admin = @id_admin AND username = @username AND password = @password)
BEGIN 
	PRINT 'Login berhasil';
END
ELSE 
BEGIN 
	PRINT 'Login gagal';
END
END
GO
/****** Object:  StoredProcedure [dbo].[loginMahasiswa]    Script Date: 02/12/2024 09:21:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[loginMahasiswa]
	@nim char(10),
	@tanggal_lahir date
AS
BEGIN 
	IF EXISTS(SELECT 1 FROM mahasiswa WHERE nim = @nim AND tanggal_lahir = @tanggal_lahir)
	BEGIN 
		PRINT 'Login Berhasil';
	END
	ELSE 
	BEGIN 
		PRINT 'Login gagal';
END
END
GO
