<div class="row">

  <div class="col-sm">


    <form action="<?php echo base_url('admin/edit_run'); ?>/<?= $usr->id; ?>" method="post">
      <div class="modal-body">
        <div class="form-group">
          <input type="text" class="form-control form-control-user" id="name" placeholder="Nama" name="name" value="<?= $usr->name; ?>">
          <small class="text-danger"><?php echo form_error('name'); ?></small>
        </div>
        <div class="form-group">
          <input type="text" class="form-control form-control-user" id="email" placeholder="Email" name="email" value="<?= $usr->email; ?>">
          <small class="text-danger"><?php echo form_error('email'); ?></small>
        </div>
        <div class="form-group">
          <label>Tanggal lahir</label>
          <input type="date" class="form-control form-control-user" id="tgl_lahir" placeholder="Tanggal Lahir" name="tgl_lahir" value="<?= $usr->tgl_lahir; ?>">
          <small class="text-danger"><?php echo form_error('tgl_lahir'); ?></small>
        </div>


        <div class="form-group mg-t-30 col-6">
          <label for="exampleFormControlSelect1">Pilih Role</label>
          <select name="role_id" class="form-control" required="">
            <option value="">--Pilih Role--</option>
            <?php if ($usr->role_id == 1) : ?>
              <option value="2" selected="">Guest</option>
              <option value="1">Admin</option>
            <?php else : ?>
              <option value="2">Guest</option>
              <option value="1" selected="">Admin</option>
            <?php endif ?>
          </select>
        </div>

        <div class="form-group mg-t-30 col-6">
          <label for="exampleFormControlSelect1">Aktif?</label>
          <select name="aktif" class="form-control" required="">
            <?php if ($usr->is_active == '0') : ?>

              <option value="0" selected="">Non Aktif</option>
              <option value="1 Enginer">Aktif</option>
            <?php else : ?>

              <option value="0">Non Aktif</option>
              <option value="1 Enginer" selected="">Aktif</option>
            <?php endif ?>
          </select>
        </div>

        <div class="modal-footer">
          <a href="<?php echo base_url('admin/akun') ?>" class="btn btn-secondary" data-dismiss="modal">Batal</a>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
    <hr>

  </div>