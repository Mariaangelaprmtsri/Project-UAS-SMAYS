<div class="flex-1 p-8">
    <h1 class="text-xl font-bold mb-4">Tambah Organisasi</h1>
    <div class="card p-8 bg-[#fbfbfb]">
        <form action="<?= BASEURL ?>/organisasi/store" method="post">
            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label for="nama" class="font-semibold">Nama</label>
                    <br>
                    <input type="text" id="nama" name="nama"
                        class="mt-2 p-1.5 rounded-lg bg-[#eff0f5] w-[90%] border border-[#161f3d]">
                </div>
                <div>
                    <label for="ketua" class="font-semibold">Ketua</label>
                    <br>
                    <input type="text" id="ketua" name="ketua"
                        class="mt-2 p-1.5 rounded-lg bg-[#eff0f5] w-[90%] border border-[#161f3d]">
                </div>
                <div>
                    <label for="penanggung_jawab" class="font-semibold">Penanggung Jawab</label>
                    <br>
                    <input type="text" id="penanggung_jawab" name="penanggung_jawab"
                        class="mt-2 p-1.5 rounded-lg bg-[#eff0f5] w-[90%] border border-[#161f3d]">
                </div>
            </div>
            <br>
            <div class="mt-10 w-full text-end flex justify-end gap-4">
                <a href="<?= BASEURL ?>/organisasi"
                    class="text-white text-md font-semibold rounded-md px-6 py-2 bg-[#ED5555] hover:bg-[#9E3939] duration-200">
                    Cancel</a>
                <button type="submit"
                    class="text-white text-md font-semibold rounded-md px-6 py-2 bg-[#5570ed] hover:bg-[#3c51b1] duration-200">Add
                    Organisasi</button>
            </div>
        </form>
    </div>
</div>