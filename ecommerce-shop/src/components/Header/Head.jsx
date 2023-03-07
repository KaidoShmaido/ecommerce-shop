import React from 'react'

const Head = () => {
  return (
    <div> 


        {/*Header section */}
        <section className='head'>
            <div className="container d_flex">
        {/*left Row for phone number and gmail */}
                <div className="left row">
                    <i className='fa fa-phone'></i>
                    <label >phone number</label>
                    <i className='fa fa-envelope'></i>
                    <label>example@gmail.com</label>
                </div>

                <div className="right row RText">
                    <label >Need Helps ?</label>
                    <label>Theme FAQ's</label>
                    <span></span>
                    <label >EN </label>
                    <label htmlFor="">USD</label>
                </div>


            </div>
        </section>

    </div>
  )
}

export default Head