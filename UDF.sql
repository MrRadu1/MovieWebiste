DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `schimb` (`mT` VARCHAR(3), `mU` VARCHAR(3), `vT` INT) RETURNS INT(11) BEGIN
RETURN (CASE WHEN mU='USD' THEN
   ( CASE WHEN mT='USD' THEN 
       vT
    WHEN mT='EUR' THEN
        vT*1.13
    WHEN mT='GBP' THEN
        vT*1.35
    END)
    WHEN mU='EUR' THEN (
    CASE WHEN mT='EUR' THEN 
       vT
    WHEN mT='USD' THEN
        vT*0.88
    WHEN mT='GBP' THEN
        vT*1.19
    END)
    WHEN mU='GBP' THEN (
    CASE WHEN mT='GBP' THEN 
       vT
    WHEN mT='EUR' THEN
        vT*0.84
    WHEN mT='USD' THEN
        vT*0.74
    END)
    END);
END$$