import "./usuarios.scss";
import { useEffect, useState } from 'react';
import * as React from 'react';
import { DataGrid } from '@mui/x-data-grid';
import axiosClient from "../../shared/http/AxiosClient";

// const columns = [
//   { field: 'id', headerName: 'ID', width: 70 },
// ];

// const rows = [
//   { id: 1, lastName: 'Snow', firstName: 'Jon', age: 35 },
// ];

export default function DataTable() {

  const [columns, setColumns] = useState([]);
  const [rows, setRows] = useState([]);

  async function fetchUsersData() {
    const response = await axiosClient.get(`datatable/users`, {});
    const data = response.data.data;
    console.log('data', data.data.data);

    setColumns(data.columns.data);
    setRows(data.data.data); 
  }


  useEffect(() => {
    fetchUsersData();
  }, []);


  return (
    <div className="main-usuarios">
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
