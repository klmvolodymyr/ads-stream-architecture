<?php

// Ext this object is particular of the TJ implementation.
// In the specification ext can be any json object, that can
// be used to extend the specification (for example google
// use it to use protocol buffer instead of json)
// In our case we define by convention to use a list of segments
// objects (3.2.22 Object: Segment)
class TJBidResponseExt
{
//    ExtEntry []ExtEntry `json:"segment,omitempty"`
}