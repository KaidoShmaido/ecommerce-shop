import React from 'react'
import { Link } from 'react-router-dom'

const Search = () => {
  return (
    <section className='search'>
      <div className='container c_flex'>
          <div className="logo width">
            <img src="" alt="" />
          </div>

          <div className="search-box f_flex">
            <i className='fa fa-search'></i>
            <input type="text" name='' id='' placeholder='search and hit enter...' />
            <span>All Category</span>
          </div>

          <div className="icon f_flex width">
            <i className='fa fa-user icon_circle'></i>
            <div className="cart">
              <Link to="/cart"></Link>
              <i className='fa fa-shopping-bag icon-circle'></i>
            </div>
          </div>

      </div>

    </section>
  )
}

export default Search