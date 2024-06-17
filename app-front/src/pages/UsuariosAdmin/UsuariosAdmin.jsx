import "./usuariosAdmin.scss";
import { useEffect, useState } from 'react';
import * as React from 'react';
import { DataGrid } from '@mui/x-data-grid';
import axiosClient from "../../shared/http/AxiosClient";
import Stack from '@mui/material/Stack';
import Button from '@mui/material/Button';
import Drawer from '@mui/material/Drawer';
import { Box } from "@mui/material";
import NuevoUsuarioDrawer from "./NuevoUsuarioDrawer";

export default function UsuariosAdmin() {

  const [columns, setColumns] = useState([]);
  const [rows, setRows] = useState([]);

  async function fetchUsersData() {
    const response = await axiosClient.get(`datatable/superadmin_usuarios`, {});
    const data = response.data.data;
    console.log('data', data.data.data);

    setColumns(data.columns.data);
    setRows(data.data.data); 
  }


  useEffect(() => {
    fetchUsersData();
  }, []);

    const [open, setOpen] = React.useState(false);

    const toggleDrawer = (newOpen) => () => {
      setOpen(newOpen);
    };


  return (
    <div className="main-usuarios">
      <div className="newUser-button">
        <Stack spacing={2} direction="row">
          <Button onClick={toggleDrawer(true)} variant="contained">Nuevo Usuario</Button>
          <Drawer open={open} onClose={toggleDrawer(false)} anchor={'right'} >
            {<NuevoUsuarioDrawer />}
          </Drawer>
        </Stack>
      </div>

      <div style={{ height: '80%', width: '100%', overflowY: 'auto', scrollbarWidth : 'none'}}>
        <DataGrid
          rows={rows}
          columns={columns}
          initialState={{
            pagination: {
              paginationModel: { page: 0, pageSize: 25 },
            },
          }}
          pageSizeOptions={[5, 10]}
          checkboxSelection
        />
      </div>
    
    </div>
  );
}
