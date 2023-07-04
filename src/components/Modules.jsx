import { useEffect } from "react";
import {Hero, ImageModule} from './modules/index'


export const Modules = (modules) => {

  const listOfModules = (modules) => { 

    if (modules) {

      return modules.map((module, index) => {
       return (
          <section className={`section_${module.acf_fc_layout}`} key={index}>
            {module.acf_fc_layout === 'hero' && <Hero {...module} />}
            {module.acf_fc_layout === 'imageModule' && <ImageModule {...module} />}
          </section>
          
       )
      })
    }
  };

  useEffect(() => {
    listOfModules();
  }, []);
  return(
    <>
      {listOfModules(modules.modules)}
    </>

  )
}
