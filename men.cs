using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Ecommerce
{    #region Men
    public class Men
    {
        #region Member Variables
        protected int _id;
        protected string _name;
        protected string _color;
        protected int _price;
        protected string _img;
        #endregion
        #region Constructors
        public Men() { }
        public Men(int id, string name, string color, int price, string img)
        {
            this._id=id;
            this._name=name;
            this._color=color;
            this._price=price;
            this._img=img;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Color
        {
            get {return _color;}
            set {_color=value;}
        }
        public virtual int Price
        {
            get {return _price;}
            set {_price=value;}
        }
        public virtual string Img
        {
            get {return _img;}
            set {_img=value;}
        }
        #endregion
    }
    #endregion
}
