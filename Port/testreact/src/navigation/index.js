import React from 'react';
import {Route, Routes} from 'react-router-dom';
import {book} from "./book";
import {Home} from '../pages/home';

export const Switch = () => {
    return (
      <>
          <Routes>
              <Route exact path={book.root} element={<Home/>}/>
          </Routes>
      </>
    )
}
