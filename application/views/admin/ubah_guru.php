<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body>
    <form action="<?php echo base_url('admin/aksi_ubah_guru') ?>"  enctype="multipart/form-data" method="post" >
    <div class="max-full rounded border overflow-hidden shadow-lg">
        <div class="px-6 py-4">
            <p class="text-xl font-bold text-center">Ubah Guru</p>
            <?php foreach ($guru as $data_guru): ?>
                            <div class="grid grid-cols-2 gap-4 mt-5">
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                                        Nama Guru
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="nama" name="nama" type="text" value="<?php echo $data_guru->nama_guru ?>">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nisn">
                                        NIK
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="nisn" name="nisn" type="number" value="<?php echo $data_guru->nisn ?>">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">
                                        Gender
                                    </label>
                                    <select name="gender" id="gender"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        <option name="gender" style="display: none;" value="<?php echo $data_guru->gender ?>">
                                        <?php echo $data_guru->gender ?></option>

                                        <?php echo $data_guru->guru->gender ?>
                                </option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="mapel">
                                        mapel
                                    </label>
                                    <select name="mapel" id="mapel"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                            <option name="mapel" value="<?php echo $data_guru->id_mapel ?>"
                                                style="display: none;">
                                                <?php echo tampil_full_kelas_byid($data_guru->id_mapel) ?></option>
                                                <?php foreach($mapel as $row): ?>
                                        <option value="<?php echo $row->id ?>">
                                            <?php echo $row->nama_guru ?></option>
                                        <?php endforeach ?>
                                        </select>

                                </div>
                                <input type="hidden" name="id_guru" value="<?php echo $data_guru->id_guru; ?>">
                                    <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-2/6">
                                    Ubah
                                </button>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </form>
</body>
</html>